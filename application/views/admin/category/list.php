<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 
 
<div class="container">
    <h1>Danh sách nhóm</h1>
    <div class="text-right"><a class="btn btn-success" href="<?=site_url('admin/categorycontroller/create'); ?>" title="Thêm">Thêm nhóm sản phẩm</a></div>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-list">
            <thead>
                <tr>
                    <th class="w50">STT</th>
                    <th>Tên nhóm</th>
                    <th>Mô tả</th>
                    <th class="w100">Hành động</th>
                </tr>
            </thead>
             
            <tbody>
                <?php foreach ($data as $i => $item) { ?>                    
                <tr>
                    <td class="w50"><?=$i+1?></td>
                    <td><?=$item->name?></td>
                    <td><?=$item->description?></td>
                    <td class="w100 act">
                        <a href="<?=site_url('admin/categorycontroller/edit/'.$item->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="delete-confirm" href="<?=site_url('admin/categorycontroller/delete/'.$item->id); ?>"><span class="glyphicon glyphicon-trash"></span></a>                                
                    </td>
                </tr>
                <?php } ?>
                 
            </tbody>
        </table>
    </div>
</div>