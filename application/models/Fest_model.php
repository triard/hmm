<?php

use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');


class Fest_model extends CI_Model {

    private $_client;
    private $_table = "ticket";
    public function __construct(){
        parent::__construct();
        
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ticket-fest2/'

        ]);
    }

    public function getAllTicket()
    {
        // return $this->db->get('mahasiswa')->result_array();


        $response = $this->_client ->request('GET', 'ticket2');

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];

    }    
    public function getPop($cat)
    {

        $response = $this->_client ->request('GET', 'ticket2/cat',[
            'query' => [
                'category' => $cat
            ]
        ]
    );

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];
    }
    public function getRock($cat)
    {

        $response = $this->_client ->request('GET', 'ticket2/cat',[
            'query' => [
                'category' => $cat
            ]
        ]
    );

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];
    }

    public function getJazz($cat)
    {

        $response = $this->_client ->request('GET', 'ticket/cat',[
            'query' => [
                'category' => $cat
            ]
        ]
    );

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];
    }
    public function getFolk($cat)
    {

        $response = $this->_client ->request('GET', 'ticket/cat',[
            'query' => [
                'category' => $cat
            ]
        ]
    );

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];
    }

    public function getProductid($id)
    {

        $response = $this->_client->request(
            'GET',
            'ticket2/',
            [
                'query' => [
                    'id' => $id
                ]
            ]
        );

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'][0];
    }

    

}

/* End of file CI_Model.php */


?>