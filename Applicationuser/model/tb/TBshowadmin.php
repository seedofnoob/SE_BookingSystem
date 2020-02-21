
<table id="tb_admin_show" class="table table-bordered table-striped mt-2">
    <thead>
        <tr class="text-center bg-secondary">
            <th>ลำดับ</th>
            <th>ชื่อ-นามสกุล</th>
            <th>Username</th>
            <th>Password</th>        
        </tr>
    </thead>
    <tbody>
        <?php for($id=1; $id <=5; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">Firstname  Lastname</td>
          <td class="text-center">admin <?php echo $id; ?></td>
          <td class="text-center">*******</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
 


