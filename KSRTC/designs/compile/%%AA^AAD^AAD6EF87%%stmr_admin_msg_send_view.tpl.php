<?php /* Smarty version 2.6.26, created on 2022-05-22 08:52:37
         compiled from stmr_admin_msg_send_view.tpl */ ?>

	 <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <div class="table-responsive">



<table align="center" class="table table-striped">
<tr>
<th>Date &nbsp;</th>
<th>Time &nbsp;</th>
<th>Name &nbsp;</th>
<th>Message &nbsp;</th>
</tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
	
	<td align="center"><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['j']['time']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['j']['Name']; ?>
</td> 
	<td align="center"><?php echo $this->_tpl_vars['j']['msg']; ?>
</td>

	<td><a href="stmr_admin_msg_send_view_reply.php?key=<?php echo $this->_tpl_vars['j']['mkey']; ?>
&& id=<?php echo $this->_tpl_vars['j']['senderid']; ?>
" class="btn btn-primary">Reply</a></td>
    	

</tr>
<?php endforeach; endif; unset($_from); ?>

</table>

 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        