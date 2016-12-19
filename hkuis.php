		<article>
		<h1>Hasil Kuis Anda Adalah </h1>
        <?php
            if (!isset($_POST['submit'])) { 
			$btn = $_POST['submit'];
            $answer1 = $_POST['tanya1jawab'];
            $answer2 = $_POST['tanya2jawab'];
            $answer3 = $_POST['tanya3jawab'];
            $answer4 = $_POST['tanya4jawab'];
            $answer5 = $_POST['tanya5jawab'];
        
            $totalbenar = 0;
            
            if ($answer1 == "D") { $totalbenar++; }
            if ($answer2 == "C") { $totalbenar++; }
            if ($answer3 == "B") { $totalbenar++; }
            if ($answer4 == "D") { $totalbenar++; }
            if ($answer5 == "C") { $totalbenar++; }
            
            echo "<h3>$totalbenar / 5 Pertanyaan benar</h3>";
			}
			else {
				unset($btn);
				$totalbenar = 0;
				echo "<h3>$totalbenar / 5 Pertanyaan benar</h3>";
			}
        ?>
		<hr/>
		<h1>Jawab pertanyaan - pertanyaan berikut untuk melihat total benar anda</h1>
		<form action="" method="post" id="submit">
		
            <ol>
            
                <li>
                
                    <h3>Apa Kepanjangan STMIK</h3>
                    
                    <div>
                        <input type="radio" name="tanya1jawab" id="tanya1jawab-A" value="A" />
                        <label for="tanya1jawab-A">A) Sekolah Tinggi Mager Ikan Kali </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya1jawab" id="tanya1jawab-B" value="B" />
                        <label for="tanya1jawab-B">B) Santai Tur Males Iku Kuliah</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya1jawab" id="tanya1jawab-C" value="C" />
                        <label for="tanya1jawab-C">C) Penting Absen Bos </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya1jawab" id="tanya1jawab-D" value="D" />
                        <label for="tanya1jawab-D">D) Sekolah Tingi Manajemen Informatika dan Komputer</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>tugas mata kuliah apakah website ini ?</h3>
                    
                    <div>
                        <input type="radio" name="tanya2jawab" id="tanya2jawab-A" value="A" />
                        <label for="tanya2jawab-A">A) Bahasa Indonesia</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya2jawab" id="tanya2jawab-B" value="B" />
                        <label for="tanya2jawab-B">B) Struktur Data</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya2jawab" id="tanya2jawab-C" value="C" />
                        <label for="tanya2jawab-C">C) Bahasa Pemrograman</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya2jawab" id="tanya2jawab-D" value="D" />
                        <label for="tanya2jawab-D">D) Pemrograman Basis Data</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Tanggal kapan Ujian Akhir Semester 2016/2017 akan dimulai ?</h3>
                    
                    <div>
                        <input type="radio" name="tanya3jawab" id="tanya3jawab-A" value="A" />
                        <label for="tanya3jawab-A">A) 3 Juni 2001</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya3jawab" id="tanya3jawab-B" value="B" />
                        <label for="tanya3jawab-B">B) 3 Januari 2017</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya3jawab" id="tanya3jawab-C" value="C" />
                        <label for="tanya3jawab-C">C) 1 Januari 2017</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya3jawab" id="tanya3jawab-D" value="D" />
                        <label for="tanya3jawab-D">D) 6 Maret 2018</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Apa url website ini ?</h3>
                    
                    <div>
                        <input type="radio" name="tanya4jawab" id="tanya4jawab-A" value="A" />
                        <label for="tanya4jawab-A">A) facebook.com</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya4jawab" id="tanya4jawab-B" value="B" />
                        <label for="tanya4jawab-B">B) youtube.com</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya4jawab" id="tanya4jawab-C" value="C" />
                        <label for="tanya4jawab-C">C) github.com</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya4jawab" id="tanya4jawab-D" value="D" />
                        <label for="tanya4jawab-D">D) dekatdihati.herokuapp.com</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Siapa dosen pengampu mata kuliah bahasa pemrograman 1 kelas A ?</h3>
                    
                    <div>
                        <input type="radio" name="tanya5jawab" id="tanya5jawab-A" value="A" />
                        <label for="tanya5jawab-A">A) Bp. Ary Setyadi</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya5jawab" id="tanya5jawab-B" value="B" />
                        <label for="tanya5jawab-B">B) Bp. Agung Nugroho</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya5jawab" id="tanya5jawab-C" value="C" />
                        <label for="tanya5jawab-C">C) Bp. Ernes Cahyo N.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tanya5jawab" id="tanya5jawab-D" value="D" />
                        <label for="tanya5jawab-D">D) Bp. Satpam</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input onClick="balik()" type="submit" value="submit" />
			<script> function balik(){
					return false;
			}
		</form>
		</article>