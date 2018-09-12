//	JavaScript Custom Praktek Kerja Lapangan
//	{

		$(function()
		{
			//	DataTables
			// 	{

					$('#jurnal-Daftar').DataTable();

			//	}

			// 	Form Behavior
			//	{
			
				// 	Halaman Registrasi
				//	{
					
						$('#registrasi-nomorInduk').keyup(function()
						{
							
							var jumlahkarakterNomorInduk 	= 	$('#registrasi-nomorInduk').val().length;
							var jumlahkarakterNamaLengkap 	= 	$('#registrasi-namaLengkap').val().length;
							var jumlahkarakterPassword 		= 	$('#registrasi-password').val().length;
							var jumlahkarakterUsername 		= 	$('#registrasi-username').val().length;
							var password 		= 	$('#registrasi-password').val();
							var passwordVerify 	= 	$('#registrasi-verifyPassword').val();
							var nomor_induk 	= 	$('#registrasi-nomorInduk').val();
							var nama_lengkap 	= 	$('#registrasi-namaLengkap').val();
							var username 		= 	$('#registrasi-username').val();							

							if(jumlahkarakterNomorInduk<5)
							{
								$('#registrasi-inputgroup-NomorInduk').addClass('has-error');
								$('#registrasi-notifikasiNomorInduk').html('Minimal 5 karakter!');
								$('#registrasi-btnDaftar').attr({
									disabled: true
								});								
							}
							else
							{
								$('#registrasi-inputgroup-NomorInduk').removeClass('has-error');
								$('#registrasi-inputgroup-NomorInduk').addClass('has-success');
								$('#registrasi-notifikasiNomorInduk').html('');

								if(nomor_induk!='' && nama_lengkap!='' && username!='' && jumlahkarakterNamaLengkap>5 && jumlahkarakterUsername>5 && jumlahkarakterNomorInduk>4 && jumlahkarakterPassword>7 && password==passwordVerify)
								{
									$('#registrasi-btnDaftar').attr({
										disabled: false
									});
								}
							}
						});

						$('#registrasi-namaLengkap').keyup(function()
						{
							
							var jumlahkarakterNomorInduk 	= 	$('#registrasi-nomorInduk').val().length;
							var jumlahkarakterNamaLengkap 	= 	$('#registrasi-namaLengkap').val().length;
							var jumlahkarakterPassword 		= 	$('#registrasi-password').val().length;
							var jumlahkarakterUsername 		= 	$('#registrasi-username').val().length;
							var password 		= 	$('#registrasi-password').val();
							var passwordVerify 	= 	$('#registrasi-verifyPassword').val();
							var nomor_induk 	= 	$('#registrasi-nomorInduk').val();
							var nama_lengkap 	= 	$('#registrasi-namaLengkap').val();
							var username 		= 	$('#registrasi-username').val();	

							if(jumlahkarakterNamaLengkap<6)
							{
								$('#registrasi-inputgroup-NamaLengkap').addClass('has-error');
								$('#registrasi-notifikasiNamaLengkap').html('Minimal 6 karakter!');
								$('#registrasi-btnDaftar').attr({
									disabled: true
								});										
							}
							else
							{
								$('#registrasi-inputgroup-NamaLengkap').removeClass('has-error');
								$('#registrasi-inputgroup-NamaLengkap').addClass('has-success');
								$('#registrasi-notifikasiNamaLengkap').html('');
								if(nomor_induk!='' && nama_lengkap!='' && username!='' && jumlahkarakterNamaLengkap>5 && jumlahkarakterUsername>5 && jumlahkarakterNomorInduk>4 && jumlahkarakterPassword>7 && password==passwordVerify)
								{
									$('#registrasi-btnDaftar').attr({
										disabled: false
									});
								}							
							}
						});

						$('#registrasi-username').keyup(function()
						{
							
							var jumlahkarakterNomorInduk 	= 	$('#registrasi-nomorInduk').val().length;
							var jumlahkarakterNamaLengkap 	= 	$('#registrasi-namaLengkap').val().length;
							var jumlahkarakterPassword 		= 	$('#registrasi-password').val().length;
							var jumlahkarakterUsername 		= 	$('#registrasi-username').val().length;
							var password 		= 	$('#registrasi-password').val();
							var passwordVerify 	= 	$('#registrasi-verifyPassword').val();
							var nomor_induk 	= 	$('#registrasi-nomorInduk').val();
							var nama_lengkap 	= 	$('#registrasi-namaLengkap').val();
							var username 		= 	$('#registrasi-username').val();	

							if(jumlahkarakterUsername<6)
							{
								$('#registrasi-inputgroup-Username').addClass('has-error');
								$('#registrasi-notifikasiUsername').html('Minimal 6 karakter!');
								$('#registrasi-btnDaftar').attr({
									disabled: true
								});												
							}
							else
							{
								$('#registrasi-inputgroup-Username').removeClass('has-error');
								$('#registrasi-inputgroup-Username').addClass('has-success');
								$('#registrasi-notifikasiUsername').html('');
								if(nomor_induk!='' && nama_lengkap!='' && username!='' && jumlahkarakterNamaLengkap>5 && jumlahkarakterUsername>5 && jumlahkarakterNomorInduk>4 && jumlahkarakterPassword>7 && password==passwordVerify)
								{
									$('#registrasi-btnDaftar').attr({
										disabled: false
									});
								}								
							}
						});

						$('#registrasi-password').keyup(function()
						{
							
							var jumlahkarakterNomorInduk 	= 	$('#registrasi-nomorInduk').val().length;
							var jumlahkarakterNamaLengkap 	= 	$('#registrasi-namaLengkap').val().length;
							var jumlahkarakterPassword 		= 	$('#registrasi-password').val().length;
							var jumlahkarakterUsername 		= 	$('#registrasi-username').val().length;
							var password 		= 	$('#registrasi-password').val();
							var passwordVerify 	= 	$('#registrasi-verifyPassword').val();
							var nomor_induk 	= 	$('#registrasi-nomorInduk').val();
							var nama_lengkap 	= 	$('#registrasi-namaLengkap').val();
							var username 		= 	$('#registrasi-username').val();	

							if(jumlahkarakterPassword<8)
							{
								$('#registrasi-inputgroup-Password').addClass('has-error');
								$('#registrasi-notifikasiPassword').html('Minimal 8 karakter!');
								$('#registrasi-btnDaftar').attr({
									disabled: true
								});												
							}
							else
							{
								$('#registrasi-inputgroup-Password').removeClass('has-error');
								$('#registrasi-inputgroup-Password').addClass('has-success');
								$('#registrasi-notifikasiPassword').html('');
								if(nomor_induk!='' && nama_lengkap!='' && username!='' && jumlahkarakterNamaLengkap>5 && jumlahkarakterUsername>5 && jumlahkarakterNomorInduk>4 && jumlahkarakterPassword>7 && password==passwordVerify)
								{
									$('#registrasi-btnDaftar').attr({
										disabled: false
									});
								}							
							}
						});

						$('#registrasi-verifyPassword').keyup(function()
						{
							
							var jumlahkarakterNomorInduk 	= 	$('#registrasi-nomorInduk').val().length;
							var jumlahkarakterNamaLengkap 	= 	$('#registrasi-namaLengkap').val().length;
							var jumlahkarakterPassword 		= 	$('#registrasi-password').val().length;
							var jumlahkarakterUsername 		= 	$('#registrasi-username').val().length;
							var password 		= 	$('#registrasi-password').val();
							var passwordVerify 	= 	$('#registrasi-verifyPassword').val();
							var nomor_induk 	= 	$('#registrasi-nomorInduk').val();
							var nama_lengkap 	= 	$('#registrasi-namaLengkap').val();
							var username 		= 	$('#registrasi-username').val();	

							if(password!=passwordVerify)
							{
								$('#registrasi-inputgroup-VerifyPassword').addClass('has-error');
								$('#registrasi-notifikasiVerifyPassword').html('Password tidak sama!');
								$('#registrasi-btnDaftar').attr({
									disabled: true
								});												
							}
							else
							{
								$('#registrasi-inputgroup-VerifyPassword').removeClass('has-error');
								$('#registrasi-inputgroup-VerifyPassword').addClass('has-success');
								$('#registrasi-notifikasiVerifyPassword').html('Password terverifikasi');

								if(nomor_induk!='' && nama_lengkap!='' && username!='' && jumlahkarakterNamaLengkap>5 && jumlahkarakterUsername>5 && jumlahkarakterNomorInduk>4 && jumlahkarakterPassword>7 && password==passwordVerify)
								{
									$('#registrasi-btnDaftar').attr({
										disabled: false
									});
								}
							}
						});

				//	}

			//	}

			//	DateRangePicker
			//	{
					$('.Prakerin-daterangepicker').daterangepicker({
					    "showDropdowns": true,
					    "autoApply": true,
					    "locale": {
					        "format": "DD-MM-YYYY",
					        "separator": " - ",
					        "applyLabel": "OK",
					        "cancelLabel": "Batal",
					        "fromLabel": "Dari",
					        "toLabel": "Hingga",
					        "customRangeLabel": "Custom",
					        "weekLabel": "W",
					        "daysOfWeek": [
					            "Mg",
					            "Sn",
					            "Sl",
					            "Rb",
					            "Km",
					            "Jm",
					            "Sa"
					        ],
					        "monthNames": [
					            "Januari",
					            "Februari",
					            "Maret",
					            "April",
					            "Mei",
					            "Juni",
					            "Juli",
					            "Agustus ",
					            "September",
					            "Oktober",
					            "November",
					            "Desember"
					        ],
					        "firstDay": 1
					    }
					}, function(start, end, label) {
					  console.log("New date range selected: ' + start.format('DD-MM-YYYY H:i:s') + ' to ' + end.format('DD-MM-YYYY H:i:s') + ' (predefined range: ' + label + ')");
					});

					$('.Prakerin-daterangepickersingledate').daterangepicker({
					    "singleDatePicker": true,
					    "showDropdowns": true,
					    "autoApply": true,
					    "mask": true,
					    "locale": {
					        "format": "DD-MM-YYYY",
					        "separator": " - ",
					        "applyLabel": "OK",
					        "cancelLabel": "Batal",
					        "fromLabel": "Dari",
					        "toLabel": "Hingga",
					        "customRangeLabel": "Custom",
					        "weekLabel": "W",
					        "daysOfWeek": [
					            "Mg",
					            "Sn",
					            "Sl",
					            "Rb",
					            "Km",
					            "Jm",
					            "Sa"
					        ],
					        "monthNames": [
					            "Januari",
					            "Februari",
					            "Maret",
					            "April",
					            "Mei",
					            "Juni",
					            "Juli",
					            "Agustus ",
					            "September",
					            "Oktober",
					            "November",
					            "Desember"
					        ],
					        "firstDay": 1
					    }
					}, function(start, end, label) {
					  console.log("New date range selected: ' + start.format('DD-MM-YYYY H:i:s') + ' to ' + end.format('DD-MM-YYYY H:i:s') + ' (predefined range: ' + label + ')");
					});

					$('.Prakerin-daterangepickersingledatewithtime').daterangepicker({
					    "timePicker": true,
					    "timePicker24Hour": true,
					    "singleDatePicker": true,
					    "showDropdowns": true,
					    "autoApply": true,
					    "locale": {
					        "format": "DD-MM-YYYY HH:mm",
					        "separator": " - ",
					        "applyLabel": "OK",
					        "cancelLabel": "Batal",
					        "fromLabel": "Dari",
					        "toLabel": "Hingga",
					        "customRangeLabel": "Custom",
					        "weekLabel": "W",
					        "daysOfWeek": [
					            "Mg",
					            "Sn",
					            "Sl",
					            "Rb",
					            "Km",
					            "Jm",
					            "Sa"
					        ],
					        "monthNames": [
					            "Januari",
					            "Februari",
					            "Maret",
					            "April",
					            "Mei",
					            "Juni",
					            "Juli",
					            "Agustus ",
					            "September",
					            "Oktober",
					            "November",
					            "Desember"
					        ],
					        "firstDay": 1
					    }
					}, function(start, end, label) {
					  console.log("New date range selected: ' + start.format('DD-MM-YYYY H:i:s') + ' to ' + end.format('DD-MM-YYYY H:i:s') + ' (predefined range: ' + label + ')");
					});					
			//	}

			//	CKEditor
			//	{
			//	}

		});

		//	General Function
		//	{

				// CKEDITOR.replace('Prakerin-textareaJurnal');
				
				function hapusJurnal(idJurnal, tanggalJurnal)
				{
					$('#hapusJurnal').modal('show');
					$('#txtTanggalJurnalHapus').html(tanggalJurnal);
					$('input[name="txtIDJurnalHapus"]').val(idJurnal);
				}

		//	}

//	}