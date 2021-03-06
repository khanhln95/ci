<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <div class="text-right"><a class="btn btn-success" href="<?=site_url('admin/productcontroller/create'); ?>" title="Thêm">Thêm sản phẩm</a></div>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-list">
            <thead>
                <tr>
                    <th class="w50">STT</th>
                    <th>Hình Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Nhóm sản phẩm</th>
                    <th>Giới thiệu</th>
                    <th>Giá</th>
                    <th>Hành động</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $items) { ?>    
                
                <tr>
                    <td class="w50"><?=$i+1?></td>
                    <td>
                        <?php if($items->picture!='') { ?>
                        <img src="<?=base_url()?>uploads/<?=$items->picture?>" height="80">
                        <?php } ?>
                    </td>
                    <td><?=$items->name?></td>
                    <td > <?php foreach($list_group as $item) {?>  
                        <?php if($item->id == $items->cateid){ echo $item->name;}?>
                    <?php } ?></td>
                    <td><?=$items->description?></td>
                    <td><?=$items->price?></td>
                    <td class="w100 act">
                        <a href="<?=site_url('admin/productcontroller/edit/'.$item->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="delete-confirm" href="<?=site_url('admin/productcontroller/delete/'.$item->id); ?>"><span class="glyphicon glyphicon-trash"></span></a> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>