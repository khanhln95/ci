<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="box-form">
    <?php echo form_open_multipart('',array('id'=>'form-groups'));?>
    <div class="clearfix"></div>
    <div class="form-group">
        <label>Tên nhóm sản phẩm</label>
        <div class="relative"><textarea class="form-control area-input" rows="1" name="name" id="name" data-error="Nhập tên"><?=(isset($items)) ? $items->name : ''?></textarea></div>
    </div>
    <div class="form-group">
        <label>Giới thiệu</label>
        <div class="relative"><textarea class="form-control area-input" rows="1" name="description" id="description" data-error="Viết vài dòng giới thiệu về sản phẩm"><?=(isset($items)) ? $items->description : ''?></textarea></div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"><?=$button_title?></button>
    </div>
    <?php echo form_close();?>
</div>