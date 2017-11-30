<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NIM Finder</title>
		<link href="./css/csstambahan.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="./css/materialize.min.css" rel="stylesheet">

		<?php
			// Fungsi Pengurai NIM, Menghasilkan Jurusan
			function getJurusan($jNumb){
				$jurusan = array(
					'1' => array(
						array('-','Matematika','Fisika','Astronomi','Mikrobiologi',
									'Kimia','Biologi','Sains dan Teknologi Farmasi'),
						array('-','-','Rekayasa Hayati','-','Rekayasa Pertanian',
									'Rekayasa Kehutanan','Farmasi Klinik dan Komunitas','-','-',
									'Teknologi Pasca Panen'),
						array('Teknik Geologi','Teknik Pertambangan','Teknik Perminyakan',
									'Teknik Geofisika','-','Teknik Metalurgi','-','-',
									'Meteorologi','Oseanografi'),
						array('Teknik Kimia','Teknik Mesin','Teknik Elektro',
									'Teknik Fisika','Teknik Indsutri','Teknik Informatika',
									'Aeronotika dan Astronotika','Teknik Material'),
						array('-','-','-','Teknik Pangan','Manajemen Rekayasa Industri',
									'Teknik Bioenergi dan Kemurgi'),
						array('Teknik Sipil','Teknik Geodesi dan Geomatika','Arsitektur',
									'Teknik Lingkungan','Perencanaan Wilayah dan Kota',
									'Teknik Kelautan','-','Rekayasa Infrastruktur Lingkungan',
									'Teknik dan Pengolahan Sumber Daya Air'),
						array('Tahap Tahun Pertama FMIPA','Tahap Tahun Pertama SITH(Program Sains)',
									'Tahap Tahun Pertama SF','Tahap Tahun Pertama FITB',
									'Tahap Tahun Pertama FTTM','Tahap Tahun Pertama STEI',
									'Tahap Tahun Pertama FTSL','Tahap Tahun Pertama FTI',
									'Tahap Tahun Pertama FSRD','Tahap Tahun Pertama FTMD'),
						array('Seni Rupa','-','Kriya','Desain Interior',
									'Desain Komunikasi Visual','Desain Produk','-','-','-','MKDU'),
						array('Teknik Tenaga Listrik','Teknik Telekomunikasi',
									'Sistem dan Teknologi Informasi','Teknik Biomedis'),
						array('Manajemen','-','Kewirausahaan','-','-','-','-',
									'Tahap Tahun Pertama SBM', 'Tahap Tahun Pertama SITH(Program Rekayasa)',
									'Tahap Tahun Pertama SAPPK'),
					),
					'2' => array(
						array('Matematika','Fisika','Astronomi','-','Kimia',
									'Biologi','Farmasi','Aktuaria','Sains Komputasi'),
						array('-','Bioteknologi','-','Biomanajemen','-','-','-',
									'Keolahragaan','Farmasi Industri'),
						array('Teknik Geologi','Rekayasa Pertambangan','Teknik Perminyakan',
									'Teknik Geofisika','Sains Kebumian','Teknik Metalurgi',
									'Teknik Panas Bumi','Teknik Air Tanah'),
						array('Teknik Kimia','Teknik Mesin','Teknik Elektro','Teknik Fisika',
									'Teknik dan Manajemen Industri','Informatika',
									'Aeoronotika dan Astronotika','Ilmu dan Teknik Material',
									'Instrumentasi dan Kontrol','Studi Pertahanan'),
						array('Studi Pembangunan','-','Transportasi','-','-','-','-',
									'-','-','Ilmu dan Rekayasa Nuklir'),
						array('Teknik Sipil','Teknik Geodesi dan Geomatika','Arsitektur',
									'Teknik Lingkungan','Perencanaan Wilayah dan Kota',
									'Teknik Kelautan','Rancang Kota',
									'Pengelolaan Infrastruktur Air Bersih dan Sanitasi'),
						array('-','-','-','-','-','-','-','-','-',
									'Sistem dan Teknik Jalan Raya'),
						array('Seni Rupa','Desain'),
						array('-','-','-','-','-','-','-','-','-','Arsitektur Lanskap'),
						array('Sains Manajemen','Administrasi Bisnis','-',
									'Administrasi Bisnis')
					),
					'3' => array(
						array('-','Matematika','Fisika','Astronomi','-','Kimia','Biologi',
									'Farmasi'),
						array('-'),
						array('Teknik Geologi','Rekayasa Pertambangan','Teknik Perminyakan',
									'Teknik Geofisika','Sains Kebumian'),
						array('Teknik Kimia','Teknik Mesin','Teknik Elektro dan Informatika',
									'Teknik Fisika','Teknik dan Manajemen Industri','-',
									'Aeronotika dan Astronotika','Ilmu dan Teknik Material'),
						array('-','-','Transportasi','-','-','-','-','-','-',
									'Rekayasa Nuklir'),
						array('Teknik Sipil','Teknik Geodesi dan Geomatika','Arsitektur',
									'Teknik Lingkungan','Perencanaan Wilayah dan Kota'),
						array('-'),
						array('Ilmu Seni Rupa dan Desain'),
						array('-'),
						array('Sains Manajemen')
					),
					'9' => array(
						array('-','Pengajaran Matematika','Pengajaran Fisika','-','-',
									'Pengajaran Kimia','-','Profesi Apoteker'),
						array('-'),
						array('-'),
						array('-'),
						array('-','-','-','-','-','Logistik'),
						array('Pengelolaan Sumberdaya Air (PSDA)','Administrasi Pertanahan',
									'-','-','-','-','-','Terapan Perencanaan Kepariwisataan')
					)
				);
				$d1 = substr($jNumb,0,1);
				$d2 = intval(substr($jNumb,1,1));
				$d3 = intval(substr($jNumb,2,1));
				if (array_key_exists($d1, $jurusan) &&
				 		array_key_exists($d2, $jurusan[$d1]) &&
						array_key_exists($d3, $jurusan[$d1][$d2])){
					return $jurusan[$d1][$d2][$d3];
				} else {
					return '-';
				}
			}

			/* Menerima dan Mengurai HTTP_GET */
			if (isset($_GET["nim"])) {
				$nim = $_GET["nim"];
			} else {
				$nim = "";
			}
			if (isset($_GET["nama"])) {
				$nama = $_GET["nama"];
			} else {
				$nama = "";
			}

			/* Menyiapkan Database */
			$db = new PDO('mysql:host=localhost;dbname=dbnimitb','root','');
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$result = $db->query("SELECT * FROM nim WHERE nim REGEXP '$nim' and nama REGEXP '$nama' ORDER BY nim ASC");
			$rowNumb = $result->rowCount();

			/* Variabel Pengatur Halaman */
			$maxShow = 10;
			$maxPage = ceil($rowNumb/$maxShow);
		?>

		<style>
			<?php
				/* Menyembunyikan Halaman 2 Sampai Seterusnya */
				for ($i = 2; $i <= $maxPage; ++$i) {
					$divid = "#tab-$i";
					echo $divid."{display:none;}";
				}
			?>
			th, td {
				border-bottom: 1px solid #ddd;
				}
				
				tr:hover {background-color: #f5f5f5
				;
				color:black;}
		</style>
	</head>
	<body>
		<div class="page">
			<div id="particles-js"></div>
			<div class="block">
				<div class="box">
					<h2> &nbsp; Cari Nim &nbsp; </h2>
					<!-- Tombol Prev Nex -->
				    <div id="btn">
					 
					 <a href="http://167.205.3.160/" class="waves-effect waves-light btn" style="color: white; float :left"><i class="material-icons">home</i></a>
        <button class="waves-effect waves-light btn" style="color: white; float :right ;margin-left: 5px;" onClick="changePage(1)" ><i class="material-icons">chevron_right</i></button>
				      <button class="waves-effect waves-light btn" style="color: white; float :right" onClick="changePage(-1)"><i class="material-icons">chevron_left</i></button>
				      
				    </div>
						<?php
							if ($rowNumb > 0) {
								echo '';
								$count = 0;
								while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
									if (($count % $maxShow) == 0) {
										echo '
											<table id="tab-'.(($count/$maxShow)+1).'" style="width:100%; clear: both; margin:5px;">
												<tr>
													<td style="font-weight: bold">Nomor</td>
													<td style="font-weight: bold">Nama</td>
													<td style="font-weight: bold">NIM</td>
													<td style="font-weight: bold">Jurusan</td>
													<td style="font-weight: bold">Angkatan</td>
										';
									}
									$angkatan = substr($row['nim'],3,2) +2000;
									echo '<tr>
													<td>'.($count+1).'</td>
													<td>'.$row['nama'].'</td>
													<td>'.$row['nim'].'</td>
													<td>'.getJurusan(substr($row['nim'],0,3)).'</td>
													<td>'. $angkatan.'</td>
												</tr>
									';
									$count++;
			            if (($count % $maxShow) == 0) {
			              echo '
			                </table>
			              ';
			        		}
								}
								if (($count % $maxShow) != 0) {
			            echo '
			              </table>
			            ';
			          }
						} else {
							echo "Tidak Ada Data";
						}
					?>
					<?php
			      /* Menampilkan Penghitung Halaman */
			      /* Menampilkan: "Hasil 1 dari x Hasil" */
			      if ($rowNumb > 0){
			        echo '
			        <div id="halaman">
			        </div>
			        ';
			      }
			      /* End of: Tampilan Penghitung Halaman */
			    ?>
			    <!-- Script Pengatur Halaman -->
			    <script>
			      var maxPage = <?php echo $maxPage; ?>;
			      var page = 1;
			      function changePage(value) {
			        page = page + value;
			        if (page < 1) {
			          page = 1;
			        } else if (page > maxPage){
			          page = maxPage;
			        }
			        for (var i = 1; i <= maxPage; ++i) {
			          var divid = '#tab-' + i.toString();
			          if (i != page){
			            $(divid).css("display","none");
			          } else {
			            $(divid).css("display","block");
			          }
			        }
			        document.getElementById("halaman").innerHTML =  "Halaman " + page +
			                                                        " dari " + maxPage +
			                                                        " halaman";
			      }
			      document.getElementById("halaman").innerHTML =  "Halaman " + page +
			                                                      " dari " + maxPage +
			                                                      " halaman";
			    </script>
			    <!-- End of Script Pengatur Halaman -->
					<br/><br/>
					<center>(c)2017 Adjie, Asyifah, Daniel, Ferdiant, Wildan</center>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="./js/particles.min.js"></script>
		<script type="text/javascript" src="./js/particles_app.js"></script>
		<script type="text/javascript" src="./js/materialize.min.js"></script>
	</body>
</html>
