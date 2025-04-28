<?php 

class Product{

    private $pid;
    private $productname;
    private $product_desc;
    private $summary;
    private $cover;
    private $sku;

    public function setPid($pid){ $this->pid = $pid; }
    public function setPname($productname)
    {
        $this->productname = $productname;
    }
    public function setPdesc($product_desc)
    {
        $this->product_desc = $product_desc;
    }
    public function setPsummary($summary)
    {
        $this->summary = $summary;
    }
    public function setPcover($cover)
    {
        $this->cover = $cover;
    }
    public function setPsku($sku)
    {
        $this->sku = $sku;
    }

    //reading product details
    public function getPid(){ return $this->pid; }
    public function getPname(){ return $this->productname; }
    public function getPdesc(){ return $this->product_desc; }
    public function getPsummary(){ return $this->summary; }
    public function getPcover(){ return $this->cover; }
    public function getPsku(){ return $this->sku; }

}

