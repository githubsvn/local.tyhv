<?php
namespace SM\Bundle\AdminBundle\Utilities;
use SM\Bundle\AdminBundle\Repository\CounterRepository;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Counter
 *
 * @author lminhthien
 */
class CounterHelper
{

    private $ip;
    //User Online
    private $userOnline;
    //Total today
    private $totalToday;
    //Total yesterday
    private $totalYesterday;
    //Total Previous Month
    private $totalMonPre;
    //Total This Month
    private $totalMonth;
    //Total Hits
    private $totalHits;
    //Timeout
    private $timeOut;
    //Time now
    private $time;
    
    /**
     *
     * @var CounterRepository 
     */
    private $repCounter;
    
    /**
     * get number of user online
     * 
     * @return int
     */
    public function getUserOnline()
    {
        return $this->userOnline;
    }
    
    /**
     * get number of visiting user in one day
     * 
     * @return type
     */
    public function getTotalToday()
    {
        return $this->totalToday;
    }
    
    public function getTotalYesterday()
    {
        return $this->totalYesterday;
    }
    
    public function getTotalMonPre()
    {
        return $this->totalMonPre;
    }
    public function getTotalMonth()
    {
        return $this->totalMonth;
    }
    public function getTotal()
    {
        return $this->totalHits;
    }
    /**
     * init class
     */
    public function __construct()
    {
        //If ip already set
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $this->repCounter = $container->get('doctrine')
                        ->getRepository('SMAdminBundle:Counter');
        
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->timeOut = Utilities::getConfig('minuteToCounterVisitor'); //Every 15 minutes update

        $time = getdate();
        $this->time = $time;

        $this->userRequest();
        $this->getDetail();
    }

    /**
     * Call function for user request server
     */
    private function userRequest()
    {
        $user = $this->repCounter->findByIp($this->ip);
        
        if (!empty($user)) {
            //Get log detail for this user in database
            //Get time
            $newTime = $this->time['hours'] * 60 + $this->time['minutes'];

            //If time larger than timeout, set new log
            $dateVisit = $user->getDate();
            $timeVisit = $user->getTime();
            $temp = explode("/", $dateVisit);
            if (( $newTime - $timeVisit ) > $this->timeOut || $temp[0] < $this->time['mday'] || $temp[1] < $this->time['mon']) {
                //More than Timeout minutes since user visited
                $this->data['ip'] = $this->ip;
                $this->data['time'] = $this->time['hours'] * 60 + $this->time['minutes'];
                $this->data['date'] = $this->time['mday'] . "/" . $this->time['mon'] . "/" . $this->time['year'];
                //Store new log into database
                $this->repCounter->create($this->data);
            }
        } else {
            //Update new data to DB
            $this->data['ip'] = $this->ip;
            $this->data['time'] = $this->time['hours'] * 60 + $this->time['minutes'];
            $this->data['date'] = $this->time['mday'] . "/" . $this->time['mon'] . "/" . $this->time['year'];
            
            $this->repCounter->create($this->data);
        }
    }
    
    /**
     * Get detail log static for website
     */
    private function getDetail()
    {
        $data = $this->repCounter->findAll();
        $newTime = $this->time['hours'] * 60 + $this->time['minutes'];
        // Get detail static
        //Set some temp variable to count
        $thisMonth = $this->time['mon'];
        $thisDate = $this->time['mday'];

        //Set all to zero
        $this->userOnline = 0;
        $this->totalToday = 0;
        $this->totalYesterday = 0;
        $this->totalMonPre = 0;
        $this->totalMonth = 0;

        //Start get detail
        foreach ($data as $value) {
            $dateVisit = $value->getDate();
            $temp = explode("/", $dateVisit);
            if ($temp[0] == $this->time['mday'] && $temp[1] == $this->time['mon']) {
                //Get user online
                $timeVisit = $value->getTime();
                if ($newTime - $timeVisit < $this->timeOut) {
                    ++$this->userOnline;
                }
            }

            if ($this->time['year'] == $temp[2]) {
                //Get today static
                if ($thisDate == $temp[0]) {
                    ++$this->totalToday;
                }

                //Get this month static
                if ($thisMonth == $temp['1']) {
                    ++$this->totalMonth;
                }
            }
        }

        //For previous
        $prevDate = $this->time['mday'] - 1;
        $prevMon = $this->time['mon'] - 1;

        if ($prevDate < 1) {
            $prevDate = 30;
            $prevMon -= 1;
        }

        if ($prevMon < 1)
            $prevMon = 12;

        foreach ($data as $value) {
            $dateVisit = $value->getDate();
            $temp = explode("/", $dateVisit);

            if ($this->time['year'] == $temp[2]) {
                if ($prevDate == $temp[0]) {
                    ++$this->totalYesterday;
                }
                if ($prevMon == $temp['1']) {
                    ++$this->totalMonPre;
                }
            }
        }

        $this->totalHits = count($this->repCounter->findAll());
    }   
    
}