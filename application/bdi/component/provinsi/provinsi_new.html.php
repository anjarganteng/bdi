<?= inputLov('Pilih Negara', 'lovcountry', 'lovcountrys','country', $_GET['action'], '', ''); ?>
<?= inputGeneral('....', 'Nama Provinsi', 'name', 'Some hint here', $_GET['action']); ?>

<?= inputTextArea('....', 'Description', 'remarks', 'Some hint here', $_GET['action']); ?>


<div class="form-actions row-fluid">
<div class="span7 offset3">
    <button type="button" onclick="saveUser('<?= $cekMenu['menu_function_link']; ?>', 'save');" class="btn btn-primary"><i class="icon-ok"></i> Save</button>
    <button type="button" onclick="showMenu('<?= $cekMenu['menu_function_link']; ?>');" class="btn btn-secondary"><i class=" icon-remove"></i> Cancel</button>
</div>
</div>
