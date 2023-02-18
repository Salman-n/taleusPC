@include('head')
<br>
<div class="container">
<h1>Buat Rakitan Baru</h1>
<hr>
<form action="/addrakitan" method="POST">
    <div>
<div class="mb-3">
    <label >Nama Lengkap</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="mb-3">
  <select class="form-select" name="data[cpu]">
    <option value="" disabled selected>Pilih desktop CPU:</option>
    <option>Intel Core i3-10100F - Harga: IDR 1,200,000</option>
    <option>Intel Core i5-10600K - Harga: IDR 3,500,000</option>
    <option>Intel Core i7-10700K - Harga: IDR 5,500,000</option>
    <option>AMD Ryzen 5 5600X - Harga: IDR 4,500,000</option>
    <option>AMD Ryzen 7 5800X - Harga: IDR 7,500,000</option>
    <option>AMD Ryzen 9 5900X - Harga: IDR 9,000,000</option>
  </select>
</div>

<div class="mb-3">
  <select class="form-select" name="data[motherboard]">
    <option value="" disabled selected>Pilih Motherboard:</option>
    <option>ASRock B460M-HDV (LGA 1200) - Harga: IDR 1,300,000</option>
    <option>Gigabyte H410M H (LGA 1200) - Harga: IDR 1,200,000</option>
    <option>ASUS Prime B550M-A (AM4) - Harga: IDR 2,300,000</option>
    <option>MSI MPG B550 Gaming Plus (AM4) - Harga: IDR 3,500,000</option>
    <option>Gigabyte AORUS X570 Master (AM4) - Harga: IDR 7,500,000</option>
  </select>
</div>

<div class="mb-3">
  <select class="form-select" name="data[RAM]">
    <option value="" disabled selected>Pilih RAM:</option>
    <option>Corsair Vengeance LPX 8GB - Harga: IDR 600,000</option>
    <option>Kingston HyperX Fury 16GB - Harga: IDR 1,100,000</option>
    <option>G.Skill Ripjaws V 32GB - Harga: IDR 2,700,000</option>
    <option>Crucial Ballistix 64GB - Harga: IDR 7,000,000</option>
    <option>Team T-Force Delta RGB 128GB - Harga: IDR 14,500,000</option>
  </select>
</div>

<div class="mb-3">
<select class="form-select" name="data[ssd]">
<option value="" disabled selected>Pilih SSD:</option>`
<option >Kingston A2000 250GB - Harga: IDR 700,000</option>
  <option>Crucial MX500 500GB - Harga: IDR 1,200,000</option>
  <option>Samsung 970 EVO Plus 1TB - Harga: IDR 3,000,000</option>
  <option >WD Black SN750 2TB - Harga: IDR 8,500,000</option>
  <option >Sabrent Rocket Q4 4TB - Harga: IDR 18,000,000</option></div>

  </select>
</div>

<div class="mb-3">
<select class="form-select" name="data[vga]">
<option value="" disabled selected>Pilih VGA:</option>`
<option>ASUS GeForce GT 710 2GB - Harga: IDR 800,000</option>
  <option >Gigabyte Radeon RX 5500 XT 4GB - Harga: IDR 4,000,000</option>
  <option >EVGA GeForce RTX 3060 12GB - Harga: IDR 12,500,000</option>
  <option>MSI GeForce RTX 3070 8GB - Harga: IDR 16,000,000</option>
  <option>ASUS ROG Strix GeForce RTX 3080 10GB - Harga: IDR 30,000,000</option>

  </select>
</div>


<div class="mb-3">
<select class="form-select" name="data[monitor]">
<option value="" disabled selected>Pilih monitor:</option>`
<option>AOC E970SWNL 18.5 inch - Harga: IDR 700,000</option>
  <option >Dell SE2419HR 24 inch - Harga: IDR 1,600,000</option>
  <option>LG 27MK600M-B 27 inch - Harga: IDR 3,500,000</option>
  <option">ASUS TUF Gaming VG27AQ 27 inch - Harga: IDR 7,000,000</option>
  <option>Samsung Odyssey G9 49 inch - Harga: IDR 36,000,000</option>

  </select>
</div>

<div class="mb-3">
<select class="form-select" name="data[casing]">
<option value="" disabled selected>Pilih Casing:</option>`
<option >Thermaltake Versa H17 - Harga: IDR 400,000</option>
  <option>NZXT H510 - Harga: IDR 1,100,000</option>
  <option >Cooler Master MasterBox MB511 - Harga: IDR 1,300,000</option>
  <option >Corsair Obsidian Series 500D - Harga: IDR 3,500,000</option>
  <option>Lian Li PC-O11 Dynamic - Harga: IDR 6,500,000</option>
</div>

</select>
</div>

<div class="mb-3">
<select class="form-select" name="data[]">
<option value="" disabled selected>Pilih :</option>`
  <option > Simbadda 380W - Harga: IDR 100,000</option>
  <option >Cooler Master MWE 450W - Harga: IDR 500,000</option>
  <option >Thermaltake Smart RGB 500W - Harga: IDR 850,000</option>
  <option >Corsair CX750M 750W - Harga: IDR 1,500,000</option>
  <option >Seasonic PRIME TX-850 850W - Harga: IDR 3,800,000</option>
  <option>EVGA SuperNOVA 1600 T2 1600W - Harga: IDR 10,000,000</option></div>

</select>
</div>
  <button class="btn btn-success btn-lg">Submit</button>
  </div>
  @csrf
</form>


<!-- foreach database hasil pc rakitan -->
@include('foot')