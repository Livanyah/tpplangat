<?php
include "conn.php";
?>
<div>
  <div class="mb-5" ><p class="ROW1">ILP KUALA LANGAT PELAJAR</p></div>
    <a href="tambahpelajar.php">TAMBAH</a>
	<link rel="stylesheet" >
</div>

<div class="table ">
  <div class=" table">
        <table border=2>
          <thead>
            <tr>
            <th scope="col">
            ID
            </th>
            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
            No Pelajar
            </th>
            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
            Nama Pelajar
            </th>
            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
            No KP
            </th>
            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
            Jantina
            </th>
            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
            Email
            </th>
            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
            No HP
            </th><br><br>
            </tr>
        </thead>
        <tbody>
        <?php
            $data = mysqli_query($con, "SELECT * FROM info_pelajar");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr class="bg-gray-400 border-b">
              <td>
                <?php echo $info["id"]; ?>
              </td>
              <td>
                <?php echo $info["no_ndp"]; ?>
              </td>
              <td>
              <?php echo $info["nama_pelajar"]; ?>
              </td>
              <td>
              <?php echo $info["no_kp"]; ?>
              </td>
              <td>
              <?php echo $info["jantina"]; ?>
              </td>
              <td>
                <?php echo $info["email"]; ?>
              <br></td><br>
              <td>   
              <td>
                <?php echo $info["no_hp"]; ?>
              <br></td><br>
              <td>    
        
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="padampelajar.php?delete_id=<?php echo $info["id"]; ?>">Padam</a></button><br><br>
            </div>
       </div>
</div>
              </div>
            </td>
              </tr>
<?php 
} 
?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    
           