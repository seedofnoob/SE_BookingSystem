<table id="tb_user_show" class="table table-bordered table-striped mt-2">
    <thead>
        <tr class="text-center bg-secondary">
            <th>ลำดับ</th>
            <th>ชื่อ-นามสกุล</th>
            <th>Username</th>     
        </tr>
    </thead>
    <tbody>
        <?php for($id=1; $id <=5; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">Firstname  Lastname</td>
          <td class="text-center">user <?php echo $id; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
 


