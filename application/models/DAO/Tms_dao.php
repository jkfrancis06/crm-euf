<?php
Class Tms_dao extends CI_Model {
    protected $DB1 = null;
    protected $index_table = 'index_data';
    protected $metric_table = 'metrics';
    protected $host_table = 'hosts';
    protected $service_table = 'services';


    public function __construct(){
	   
        parent::__construct();
        $config['hostname'] = '172.12.240.1';
        $config['username'] = 'amalys';
        $config['password'] = 'amalys';
        $config['database'] = 'centreon_storage';
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = '';
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';
        $config['autoinit'] = TRUE;
        $config['stricton'] = FALSE;
        $this->DB1 = $this->load->database($config,TRUE);

        
        
    }

    public function getAllIndex()
    {
        $query = $this->DB1->get($this->index_table);
        return $query->result();
    }
    
    public function getHostByName($pattern){
        $this->DB1->like('name',"$pattern");
        $query = $this->DB1->get($this->host_table);
        return $query->result();
    }
    
    public function getServiceByName($pattern, $host){
        $query = $this->DB1->get_where($this->service_table, array('description' => $pattern,
            'host_id' => $host));
        return $query->result();
    }
    
    public function getAllServiceByName($pattern){
        $query = $this->DB1->get_where($this->service_table, array('description' => $pattern));
        return $query->result();
    }

    public function getIndexByService($id){
        $query = $this->DB1->get_where($this->index_table, array('service_id' => $id));
        return $query->result();
    }

    public function getMetric($index,$metricname){
        $query = $this->DB1->get_where($this->metric_table, array('index_id' => $index, 'metric_name' => $metricname ));
        return $query->result();

    }

    public function getMetricData($metric, $startDate, $endDate){
        $query = $this->DB1->query("SELECT  FROM_UNIXTIME(ctime,'%Y-%m-%d %H:%i:%s') as ldate, MAX(value) as trafic from data_bin WHERE id_metric=$metric  AND ctime between UNIX_TIMESTAMP('$startDate') AND UNIX_TIMESTAMP('$endDate') GROUP BY day(ldate); ");
        return $query->result();
    }
    
    public function getAvgMetricData($metric, $startDate, $endDate){
        $query = $this->DB1->query("SELECT  FROM_UNIXTIME(ctime,'%Y-%m-%d %H:%i:%s') as ldate, AVG(value) as trafic from data_bin WHERE id_metric=$metric  AND ctime between UNIX_TIMESTAMP('$startDate') AND UNIX_TIMESTAMP('$endDate') GROUP BY day(ldate); ");
        return $query->result();
    }
    
    public function getMinMetricData($metric, $startDate, $endDate){
        $query = $this->DB1->query("SELECT  FROM_UNIXTIME(ctime,'%Y-%m-%d %H:%i:%s') as ldate, MIN(value) as trafic from data_bin WHERE id_metric=$metric  AND ctime between UNIX_TIMESTAMP('$startDate') AND UNIX_TIMESTAMP('$endDate') GROUP BY day(ldate) AND value <>0; ");
        return $query->result();
    }

    public function getPurMetricData($metric, $startDate, $endDate){
        $query = $this->DB1->query("SELECT  FROM_UNIXTIME(ctime,'%Y-%m-%d %H:%i:%s') as ldate, value from data_bin WHERE id_metric=$metric  AND ctime between UNIX_TIMESTAMP('$startDate') AND UNIX_TIMESTAMP('$endDate') order by ctime asc;");
        return $query->result();
    }
    
    public function getBrasTrafic($metric,$startDate, $endDate){
        $query = $this->DB1->query("SELECT  FROM_UNIXTIME(ctime,'%H:%i:%s') as ldate, round((value / (1024*1024)),3) as trafic from data_bin WHERE id_metric=$metric  AND ctime between UNIX_TIMESTAMP('$startDate') AND UNIX_TIMESTAMP('$endDate') order by ctime asc;");
        return $query->result();
    }






    
    
}

