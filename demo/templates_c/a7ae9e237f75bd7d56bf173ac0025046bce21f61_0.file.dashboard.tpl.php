<?php
/* Smarty version 3.1.36, created on 2020-08-02 10:38:32
  from 'D:\xampp\htdocs\smarty\demo\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f267b88034309_98442990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ae9e237f75bd7d56bf173ac0025046bce21f61' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty\\demo\\templates\\dashboard.tpl',
      1 => 1596357511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f267b88034309_98442990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Dashboard'), 0, false);
?>

<div class="row">
    <div class="col-md-8">
        <h1>Dashboard - <?php echo $_smarty_tpl->tpl_vars['myname']->value;?>
</h1>
    </div>
    <div class="col-md-4">
        <div class="float-right pt-3">
            smarty.version -> <?php echo Smarty::SMARTY_VERSION;?>

        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row">
        <div class="col-md-6">
            <form action="#" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" autocomplete="off" id="username" placeholder="Enter Username" name="username" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control" autocomplete="off" id="pwd" placeholder="name@example.com" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> I agree
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-6">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">User Name</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u', false, 'srno');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['srno']->value => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['srno']->value+1;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value['user_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value['user_email'];?>
</td>
                    </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['u']->do_else) {
?>
                    <tr>
                        <td colspan="3" class="text-danger text-center">No Record Found</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>

        </div>

    </div>
</div>

<?php echo '<script'; ?>
>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
