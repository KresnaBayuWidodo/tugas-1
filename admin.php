<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="admin"><i class="fa-solid fa-house"></i><h1>Admin</h1></div>
        <ul>
            <li><a href="Admin.php"><i class="fa-solid fa-gauge"></i>&nbsp;<span class="teks">Dashboard</span></a></li>
            <li><a href="barang.php"><i class="fa-solid fa-box"></i>&nbsp;&nbsp;<span class="teks">Stok Barang</span></a></li>
            <li><a href="Supplier.php"><i class="fa-solid fa-users"></i></i>&nbsp;<span class="teks">Daftar Suplier</span></a></li>
            <li><a href="Laporan.php"><i class="fa-solid fa-clipboard-list"></i>&nbsp;<span class="teks">Laporan</span></a></li>
            <li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;<span class="teks">LogOut</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></i></button>
                </div>
                <div class="user">
                    <a href="" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="" class="btn"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="isi">
                    <h1>10</h1>
                    <h3>Stok Barang</h3>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-gauge"></i>
                </div>
            </div>
            <div class="card">
                <div class="isi">
                    <h1>2</h1>
                    <h3>Daftar Suplier</h3>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-truck"></i>
                </div>
            </div>
            <div class="card">
                <div class="isi">
                    <h1>10</h1>
                    <h3>Laporan</h3>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
            </div>
        </div>          
    </div>
    <script>           
        var rIndex,
            table = document.getElementById("table");
        
        function checkEmptyInput()
        {
            var isEmpty = false,
                kbarang = document.getElementById("kbarang").value,
                jbarang = document.getElementById("jbarang").value,
                brand = document.getElementById("brand").value;
                berat = document.getElementById("berat").value;
                stok = document.getElementById("stok").value;
                harga = document.getElementById("harga").value;
        
            if(kbarang === ""){
                alert("Kode Barang Connot Be Empty");
                isEmpty = true;
            }
            else if(jbarang === ""){
                alert("Jenis Barang Connot Be Empty");
                isEmpty = true;
            }
            else if(brand === ""){
                alert("Brand Connot Be Empty");
                isEmpty = true;
            }
            else if(berat === ""){
                alert("Berat Connot Be Empty");
                isEmpty = true;
            }
            else if(stok === ""){
                alert("Stok Connot Be Empty");
                isEmpty = true;
            }
            else if(harga === ""){
                alert("Harga Connot Be Empty");
                isEmpty = true;
            }
            return isEmpty;
        }
        
        function addHtmlTableRow()
        {
            if(!checkEmptyInput()){
            var newRow = table.insertRow(table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                cell4 = newRow.insertCell(3),
                cell5 = newRow.insertCell(4),
                cell6 = newRow.insertCell(5),
                kbarang = document.getElementById("kbarang").value,
                jbarang = document.getElementById("jbarang").value,
                brand = document.getElementById("brand").value;
                berat = document.getElementById("berat").value;
                stok = document.getElementById("stok").value;
                harga = document.getElementById("harga").value;
        
            cell1.innerHTML = kbarang;
            cell2.innerHTML = jbarang;
            cell3.innerHTML = brand;
            cell4.innerHTML = berat;
            cell5.innerHTML = stok;
            cell6.innerHTML = harga;
            selectedRowToInput();
        }
        }

        function selectedRowToInput()
        {
            
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].onclick = function()
                {
                  rIndex = this.rowIndex;
                  document.getElementById("kbarang").value = this.cells[0].innerHTML;
                  document.getElementById("jbarang").value = this.cells[1].innerHTML;
                  document.getElementById("brand").value = this.cells[2].innerHTML;
                  document.getElementById("berat").value = this.cells[3].innerHTML;
                  document.getElementById("stok").value = this.cells[4].innerHTML;
                  document.getElementById("harga").value = this.cells[5].innerHTML;
                };
            }
        }
        selectedRowToInput();
        
        function editHtmlTbleSelectedRow()
        {
            var kbarang = document.getElementById("kbarang").value,
                jbarang = document.getElementById("jbarang").value,
                brand = document.getElementById("brand").value;
                berat = document.getElementById("berat").value;
                stok = document.getElementById("stok").value;
                harga = document.getElementById("harga").value;
           if(!checkEmptyInput()){
            table.rows[rIndex].cells[0].innerHTML = kbarang;
            table.rows[rIndex].cells[1].innerHTML = jbarang;
            table.rows[rIndex].cells[2].innerHTML = brand;
            table.rows[rIndex].cells[3].innerHTML = berat;
            table.rows[rIndex].cells[4].innerHTML = stok;
            table.rows[rIndex].cells[5].innerHTML = harga;
          }
        }
        
        function removeSelectedRow()
        {
            table.deleteRow(rIndex);
            document.getElementById("kbarang").value = "";
            document.getElementById("jbarang").value = "";
            document.getElementById("brand").value = "";
            document.getElementById("berat").value = "";
            document.getElementById("stok").value = "";
            document.getElementById("harga").value = "";
        }
    </script>
</body>
</html>