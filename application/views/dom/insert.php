<?php $this->load->view('template/header_admin');?>
<?php $this->load->view('template/menu_admin');?>

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
			<div class="panel panel-default">
				<div class="panel-heading">Sửa Thông tin DOM</div>
				<div class="row w3-res-tb">
					<div class="col-sm-3 ">
						<h4 class="sucess"><?php if(isset($sucess)) echo "Thêm mới thành công";?></h4>
						<form action="<?php echo base_url_ci;?>admin/addDom" method="post">
							<div class="input-group">
								<span>Url:</span> <br /> <input type="text" name="url"
									value="<?php echo set_value('url')?>" placeholder="Địa chỉ Url"
									style="width: 500px;" required>
							</div>
							<span class="loi"> <?php echo form_error("url"); ?></span>
							<div class="input-group">
								<span>Source Nguồn:</span> <br /> <input type="text"
									name="source" value="<?php echo set_value('source')?>"
									placeholder="Source Nguồn" style="width: 500px;" required>
							</div>
							<span class="loi"><?php echo form_error("source"); ?></span>
							<div class="input-group">
								<span>Pattern:</span><br /> <input type="text" name="pattern"
									value="<?php echo set_value('pattern')?>" placeholder="Pattern"
									style="width: 500px;" required>
							</div>
							<span class="loi"><?php echo form_error("pattern"); ?> </span>
							<div class="input-group">
								<span>Pattern Detail:</span><br /> <input type="text"
									name="pattern_detail"
									value="<?php echo set_value('pattern_detail')?>"
									placeholder="Pattern Detail" style="width: 500px;" required>
							</div>
							<span class="loi"><?php echo form_error("pattern_detail"); ?> </span>

							<button class="btn btn-danger btn-block" type="submit" name="add">Thêm
								mới DOM</button>

						</form>
						<br /> <a href="<?php echo base_url_ci;?>admin/listDom"><button
								class="btn btn-sm btn-info btn-block" type="submit">Danh sách
								DOM</button></a>
					</div>
					<div class="col-sm-4"></div>
					<div class="col-sm-5"></div>
				</div>
			</div>
		</div>
	</section>
</section>
<?php $this->load->view('template/footer_admin');?>
