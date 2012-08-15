<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sunsilk Click The Car</title>
<link href="<?php echo base_url()?>templates/css/sunsilk.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url()?>templates/css/stylesheet.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url()?>templates/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>templates/js/main.js"></script>

</head>

<body>
    
    <div id="wrapper">
        <div class="container">
            <div class="content_area">
                <?php $this->load->view('common/header');?>
                <div id="content">
                	<?php $this->load->view($content);?>
                </div>
            </div>
            
            <?php $this->load->view('common/footer');?>
        </div>
    </div>

</body>
</html>
