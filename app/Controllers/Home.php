<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_model;
use App\Models\U_model;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Home extends BaseController
{
	// Add-ons
	public function index(){
		echo view('login');
		echo view('footer');
	}

	public function aksi_login(){
	$u=$this->request->getPost('username');
    $p=$this->request->getPost('pswd');
    $model= new M_model();
    $data=array(
        'username'=>$u,
        'password'=>$p
    );
    $cek=$model->getWhere2('user', $data);
    if ($cek>0) {
        session()->set('id', $cek['id_user']);
        session()->set('username', $cek['username']);
        session()->set('email', $cek['email']);
        session()->set('level', $cek['level']);
        return redirect()->to('/Home/mpg');
    }else {
        return redirect()->to('/Home');
    }
	}

	public function log_out(){
		session()->destroy();
    	return redirect()->to('/Home');
	}
	
	public function excel()
	{
		if(session()->get('level')==1){
			
			echo view('header');
			echo view('menu');
			echo view('excel');
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
    }
	public function import()
	{
	    if(session()->get('level')==1){
	    $file = $this->request->getFile('file');
	    $spreadsheet = IOFactory::load($file);
		print_r($file);
	    $sheet = $spreadsheet->getActiveSheet();
	    $highestRow = $sheet->getHighestRow();
	    $highestColumn = $sheet->getHighestColumn();
	    for ($row = 2; $row <= $highestRow; $row++) {	

	        $data = [
	            'username' => $sheet->getCellByColumnAndRow(1, $row)->getValue(),
	            'email' => $sheet->getCellByColumnAndRow(2, $row)->getValue(),
	            'password' => $sheet->getCellByColumnAndRow(3, $row)->getValue(),
	            'level' => $sheet->getCellByColumnAndRow(4, $row)->getValue(),
	        ];	

			$model = new U_model();
	        $model->insert($data);
	    }	

	    return redirect()->to('/Home/user');
	}else{
	    return redirect()->to('/Home');
	}
	}

	public function mpg(){
		if(session()->get('level')== 1 ) {
			echo view('header');
			echo view('menu');
			return view('mpg1');
			echo view('footer');
		}else if(session()->get('level')== 2 ) {
			$model = new M_model();
			$on = 'user.id_user=data_murid.guru_p';
			$id = session()->get('id');
    		$where=array('id_user'=>$id);
			$data['mp'] = $model->tampilW('user','data_murid',$on, $where);
			// print_r($data);
			echo view('header');
			echo view('menu');
			return view('mpg2',$data);
			echo view('footer');
		}else if(session()->get('level')== 3 ){
			echo view('header');
			echo view('menu');
			return view('mpg3');
			echo view('footer');
		}else if(session()->get('level')== 4 ){
			$model = new M_model();
			$on = 'user.id_user=data_murid.instruktur';
			$id = session()->get('id');
    		$where=array('instruktur'=>$id);
			$data['mp'] = $model->tampilW('user','data_murid',$on, $where);
			
			echo view('header');
			echo view('menu');
			return view('mpg4', $data);
			echo view('footer');
		}else if(session()->get('level')== 5 ){
			// $model = new M_model();
			// $on = 'user.id_user=data_murid.instruktur';
			// $id = session()->get('id');
    		// $where=array('id_user'=>$id);
			// $data['mp'] = $model->tampilW('user','data_murid',$on, $where);
			
			echo view('header');
			echo view('menu');
			return view('mpg5');
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function reset($id){
		$model=new M_model();
		$where=array('id_user'=>$id);
		$user=array('password'=>'aaaa');
		$model->qedit('user', $user, $where);
		echo view('header');
		echo view('menu');
		echo view('footer');
		return redirect()->to('/Home/user');
	}

	// User
	public function register(){
		$model = new M_model(); 
		$on='user.level=level.id_level';
		$data['vuser'] = $model->join2('user','level',$on);
		echo view('register', $data);
		echo view('footer');
	}

	public function output_register(){
		$a = $this -> request-> getPost('username');
		$b = $this -> request-> getPost('email');
		$c = $this -> request-> getPost('pswd');
		$d = $this -> request-> getPost('lvl');
		
		$simpan = array(
			'username' => $a,
			'email' => $b,
			'password' => $c,
			'level' => 4
		);
		$model = new M_model();
		$model -> simpan('user',$simpan);		
		return redirect()->to ('/Home/index');
	}

	public function user_s(){
		if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4 || session()->get('level')== 5) {
			$model = new M_model();
			$on = 'user.level=level.id_level';
			$id = session()->get('id');
    		$where=array('id_user'=>$id);
			$data['us'] = $model->joinW('user','level',$on, $where);
			echo view ('header');
			echo view ('menu');
			return view ('v_us', $data);
			echo view ('footer');
		}else{
			return redirect()->to('/Home');
		}	
	}

	public function detail(){
		if(session()->get('level')== 2 || session()->get('level')== 5) {
			$model = new M_model();
			$on = "data_guru.user=user.id_user";
			$id = session()->get('id');
    		$where=array('user'=>$id);
			$data['dt'] = $model->joinW('data_guru','user',$on, $where);
			echo view ('header');
			echo view ('menu');
			return view ('v_detail1', $data);
			echo view ('footer');
		}else if(session()->get('level')== 3 ) {
			$model = new M_model();
			$on = "data_murid.user=user.id_user";
			$id = session()->get('id');
    		$where=array('user'=>$id);
			$data['dt'] = $model->joinW('data_murid','user',$on, $where);
			echo view ('header');
			echo view ('menu');
			return view ('v_detail2', $data);
			echo view ('footer');
		}else if(session()->get('level')== 4){
			$model = new M_model();
			$on = "data_instruktur.user=user.id_user";
			$id = session()->get('id');
    		$where=array('user'=>$id);
			$data['dt'] = $model->joinW('data_instruktur','user',$on, $where);
			echo view ('header');
			echo view ('menu');
			return view ('v_detail3', $data);
			echo view ('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
	
	public function user(){
		if(session()->get('level')==1) {
			$model = new M_model(); 
			$on='user.level=level.id_level';
			$data['vuser'] = $model->join2('user','level',$on);
			echo view('header');
			echo view('menu');
			echo view('v_user', $data);
			echo view('footer');
		}else{
				return redirect()->to('/Home');
		}
	}

	// public function t_user(){
	// 	if(session()->get('level')==1) {
	// 		$model = new M_model();
	// 		$data['vuser'] = $model->tampil('level');
	// 		return view ('v_tuser', $data);
	// 	}else{
	// 	return redirect()->to('/Home');
	// 	}
	// }

	// public function output_tuser(){
	// 	$a = $this -> request-> getPost('username');
	// 	$b = $this -> request-> getPost('email');
	// 	$c = $this -> request-> getPost('pswd');
	// 	$d = $this -> request-> getPost('lvl');
		
	// 	$simpan = array(
	// 		'username' => $a,
	// 		'email' => $b,
	// 		'password' => $c,
	// 		'level' => $d
	// 	);
	// 	$model = new M_model();
	// 	$model -> simpan('user',$simpan);		
	// 	return redirect()->to ('/Home/murid');
	// }


	public function e_user($id){
		if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4 || session()->get('level')== 5) {
			$model = new M_model();
    		$where=array('id_user'=>$id);
			$data['vuser'] = $model->getWhere('user', $where);
			echo view ('header');
			echo view ('menu');
			return view ('v_euser', $data);
			echo view ('footer');
		}else{
		return redirect()->to('/Home');
		}
	}

	public function output_euser(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('username');
		$b = $this -> request-> getPost('email');
		$c = $this -> request-> getPost('password');
		
		$where=array('id_user'=>$id);
		$simpan = array(
			'username' => $a,
			'email' => $b,
			'password' => $c
			// 'level' => $d
		);
		$model = new M_model();
		$model -> qedit('user',$simpan,$where);		
		return redirect()->to ('/Home/user_s');
	}

	// Murid
	public function t_murid(){
		if(session()->get('level')== 1 || session()->get('level')== 3) {
			$model = new M_model();
			$data['vmurid'] = $model->tampil('data_murid');
			echo view('header');
			echo view('menu');
			echo view('v_tmurid', $data);
			echo view('footer');
		}else{
		return redirect()->to('/Home');
		}
	}

	public function output_tmurid(){
		$d = $this -> request-> getPost('nm');
		$e = $this -> request-> getPost('nis');
		$f = $this -> request-> getPost('t1');
		$g = $this -> request-> getPost('t2');
		$h = $this -> request-> getPost('jrsn');
		$i = $this -> request-> getPost('nhp');
		$j = $this -> request-> getPost('np');
		
		$id = session()->get('id');
		$data = array(
			'nama_murid' => $d,
			'nis' => $e,
			'tgl_lahir' => $f,
			'tmpt_lahir' => $g,
			'jurusan' => $h,
			'no_hp' => $i,
			'tmpt_perusahaan' => $j,
			'user' => $id
		);
		$model = new M_model();	
		$model->simpan('data_murid',$data);
		return redirect()->to ('/Home/detail');
	}

	public function e_murid($id){
		if(session()->get('level')== 1 || session()->get('level')== 3) {
			$model = new M_model();
			$where = array('id_data'=>$id);
			$data['s'] = $model->getWhere('data_murid',$where);
			echo view ('header');
			echo view ('menu');
			echo view ('v_emurid', $data);
			echo view ('footer');
		}else{
		return redirect()->to('/Home');
		}
	}
	
	public function output_emurid(){
		$id = $this -> request-> getPost('id');
		$d = $this -> request-> getPost('nm');
		$e = $this -> request-> getPost('nis');
		$f = $this -> request-> getPost('t1');
		$g = $this -> request-> getPost('t2');
		$h = $this -> request-> getPost('jrsn');
		$i = $this -> request-> getPost('nhp');
		$j = $this -> request-> getPost('np');

		$model=new M_model();
		$where2=array('id_data'=>$id);
		$data2 = array(
			'nama_murid' => $d,
			'nis' => $e,
			'tgl_lahir' => $f,
			'tmpt_lahir' => $g,
			'jurusan' => $h,
			'no_hp' => $i,
			'tmpt_perusahaan' => $j
		);
		$model->qedit('data_murid', $data2,$where2);
		return redirect()->to('/home/detail');
	}

	// Absen dan Agenda
	
	// public function absen(){
	// 	if(session()->get('level')== 1 || session()->get('level')== 2 ) {
	// 		echo view('header');
	// 		echo view('menu');
	// 		return view('v_absenG');
	// 		echo view('footer');
	// 	}else if(session()->get('level')== 1 || session()->get('level')== 3 ) {
	// 		$model = new M_model();
	// 		$data['ab'] = $model->tampil('data_agenda');
	// 		echo view('header');
	// 		echo view('menu');
	// 		return view('v_absen', $data);
	// 		echo view('footer');
	// 		// print_r($data);
	// 	}else if(session()->get('level')== 1 || session()->get('level')== 4 ){
	// 		echo view('header');
	// 		echo view('menu');
	// 		return view('v_absenI');
	// 		echo view('footer');
	// 	}else{
	// 		return redirect()->to('/Home');
	// 	}
	// }
	
	public function absen(){
		if(session()->get('level')== 1 || session()->get('level')== 3 ) {
			$model = new M_model();
			$data['ab'] = $model->tampil('data_agenda');
			echo view('header');
			echo view('menu');
			return view('v_absen', $data);
			echo view('footer');
			// print_r($data);
		}else{
			return redirect()->to('/Home');
		}
	}
	
	public function absen2(){
		if(session()->get('level')== 1 || session()->get('level')== 3 ) {
			$model = new M_model();
			echo view('header');
			echo view('menu');
			return view('v_absen2');
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function submit_menu(){
		$model = new M_model();
		$id = session()->get('id');
		$murid = array('murid'=>$id);
	    $awal = $this->request->getPost('tgl1');
	    $akhir = $this->request->getPost('tgl2');

		$data['f'] = $model->filter('data_absensi',$murid, $awal, $akhir);
		// print_r($data);
		echo view('header');
		echo view('menu');
		return view ('v_absen22', $data);  
		echo view('footer');
	}

	public function fd_murid($id){
		if(session()->get('level')== 1 || session()->get('level')== 3 ) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['ab'] = $model->getWhere('data_agenda',$where);
			echo view('header');
			echo view('menu');
			return view('v_fd1',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_fdm1(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('rp1');
		$b = $this -> request-> getPost('rp2');
		$c = $this -> request-> getPost('rp3');
		$d = $this -> request-> getPost('rp4');
		$e = $this -> request-> getPost('rp5');
	
		$where = array('id_agenda'=>$id);
		$data = array(
			'renper1' => $a,
			'renper2' => $b,
			'renper3' => $c,
			'renper4' => $d,
			'renper5' => $e
		);
		$model = new M_model();	
		$model->qedit('data_agenda',$data,$where);
		// print_r($data);
		return redirect()->to('/Home/output_check/' .$id);
	}
	
	public function fd_murid2($id){
		if(session()->get('level')== 1 || session()->get('level')== 3 ) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['ab'] = $model->getWhere('data_agenda',$where);
			echo view('header');
			echo view('menu');
			return view('v_fd2', $data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_fdm2(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('reap1');
		$b = $this -> request-> getPost('reap2');
		$c = $this -> request-> getPost('reap3');
		$d = $this -> request-> getPost('reap4');
		$e = $this -> request-> getPost('reap5');
	
		$where = array('id_agenda'=>$id);
		$data = array(
			'reape1' => $a,
			'reape2' => $b,
			'reape3' => $c,
			'reape4' => $d,
			'reape5' => $e
		);
		$model = new M_model();	
		$model->qedit('data_agenda',$data,$where);
		// print_r($data);
		return redirect()->to ('/Home/fd_murid3/' .$id);
	}
	
	public function fd_murid3($id){
		if(session()->get('level')== 1 || session()->get('level')== 3 ) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['ab'] = $model->getWhere('data_agenda',$where);
			echo view('header');
			echo view('menu');
			return view('v_fd3', $data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_fdm3(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('pk1');
		$b = $this -> request-> getPost('pk2');
		$c = $this -> request-> getPost('pk3');
	
		$where = array('id_agenda'=>$id);
		$data = array(
			'pk1' => $a,
			'pk2' => $b,
			'pk3' => $c
		);
		$model = new M_model();	
		$model->qedit('data_agenda',$data,$where);
		return redirect()->to('/Home/output_check/' .$id);
	}

	public function checkin($id){
		$model = new M_Model();
		$where2=array('id_agenda'=>$id);
		$data2 = array(
			'jam_masuk'=>date("H:i:s")
		);
		$model->qedit('data_agenda', $data2,$where2);
		// return redirect()->back();
		return redirect()->to('/Home/output_check/' .$id);
	}
	
	public function checkout($id){
		$model = new M_Model();
		$where2=array('id_agenda'=>$id);
		$data2 = array(
			'jam_keluar'=>date('H:i:s')
		);
		$model->qedit('data_agenda', $data2,$where2);
		return redirect()->to('/Home/output_check/' .$id);
		// print_r($data2);
	}

	public function output_check($id){
		$model = new M_model();
		$where=array('id_agenda'=>$id);
		$data['k']= $model->getWhere('data_agenda', $where);
		// print_r($data);
		echo view('header');
		echo view('menu');
		echo view('opc', $data);
		echo view('footer');
	}

	public function search(){
		$tgl = $this->request->getPost('tgl');
		$murid = session()->get('id');
		
		$model = new M_model();
		$er = $model->filter1('data_agenda', $murid, $tgl);
	
		if ($er==null) {
			
			$data = array(
				'tanggal' => $tgl,
				'murid' => session()->get('id')
			);
			$model->simpan('data_agenda', $data);

			$data2['ab'] = $model->filter1('data_agenda', $murid, $tgl);
	
			echo view('header');
			echo view('menu');
			return view('v_absenn', $data2);
			echo view('footer');
		}else{

			$data2['ab'] = $model->filter1('data_agenda', $murid, $tgl);
		
			echo view('header');
			echo view('menu');
			return view('v_absenn', $data2);
			echo view('footer');
		}
		
	}

	// Guru
	public function t_guru(){
		if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 5) {
			$model = new M_model();
			$data['vguru'] = $model->tampil('data_guru');
			echo view('header');
			echo view('menu');
			echo view('v_tguru', $data);
			echo view('footer');
		}else{
		return redirect()->to('/Home');
		}
	}

	public function output_tguru(){
		$d = $this -> request-> getPost('nm');
		$e = $this -> request-> getPost('nik');
		$f = $this -> request-> getPost('t1');
		$g = $this -> request-> getPost('t2');
		$h = $this -> request-> getPost('kt');
		$i = $this -> request-> getPost('nhp');
	
   		$id = session()->get('id');
		$data = array(
			'nm_guru' => $d,
			'nik' => $e,
			'tgl_lahir' => $f,
			'tmpt_lahir' => $g,
			'keterangan' => $h,
			'no_hp' => $i,
			'user' => $id
		);
		$model = new M_model();	
		$model->simpan('data_guru',$data);
		return redirect()->to ('/Home/detail');
	}

	public function e_guru($id){
		if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 5) {
			$model = new M_model();
			$where = array('id_guru'=>$id);
			$data['s'] = $model->getWhere('data_guru',$where);
			echo view ('header');
			echo view ('menu');
			echo view ('v_eguru', $data);
			echo view ('footer');
		}else{
		return redirect()->to('/Home');
		}
	}
	
	public function output_eguru(){
		$id = $this -> request-> getPost('id');
		$d = $this -> request-> getPost('nm');
		$e = $this -> request-> getPost('nik');
		$f = $this -> request-> getPost('t1');
		$g = $this -> request-> getPost('t2');
		$h = $this -> request-> getPost('kt');
		$i = $this -> request-> getPost('nhp');

		$model = new M_Model();
		$where2=array('id_guru'=>$id);
		$data2 = array(
			'nm_guru' => $d,
			'nik' => $e,
			'tgl_lahir' => $f,
			'tmpt_lahir' => $g,
			'keterangan' => $h,
			'no_hp' => $i
		);
		$model->qedit('data_guru', $data2,$where2);
		return redirect()->to('/home/detail');
	}

	public function d_guru($id){
		$model = new M_model();
		$where = array('user'=>$id);
		$where2 = array('id_user'=>$id);
		$model->hapus('data_guru', $where);
		$model->hapus('user', $where2);
		return redirect()->to ('/Home/guru');
	}

	public function search2(){
		$date = $this->request->getPost('tgl');
		$user = session()->get('id');
		
		
		$on = 'data_absensi.murid=data_murid.user';
		// $id = session()->get('id');
		// $where = array('id_user'=>$id);
		
		$model = new M_model();
		$data['mp'] = $model->getData('data_absensi', 'data_murid',$on,$date, $user);
		// $data['mm'] = $model->join2('user', 'data_murid', $on, $where);

		// print_r($data);
		echo view('header');
		echo view('menu');
		return view('search2', $data);
		echo view('footer');
		
	}
	
	public function save(){
		$b = $this->request->getPost('idm');
		$a = $this->request->getPost('kh');
		$tgl = $this->request->getPost('tgl');
		
		$data = [];
		
		for ($i = 0; $i < count($b); $i++) {
			$data[] = [
				'tanggal' => $tgl[$i],
				'kehadiran' => $a[$i],
				'murid' => $b[$i],
				'createdBy' => session()->get('id')
			];
		}
		// print_r($data);
		$model = new M_model(); 
		$model->simpanBatch('data_absensi', $data);
		
		return redirect()->to ('/Home/mpg');
	}
	
	public function update(){
		$id = $this->request->getPost('idd');
		$b = $this->request->getPost('idm');
		$a = $this->request->getPost('kh');

		$where=array('id_absensi'=>$id);
		
		$model = new M_model();

    	$data = [];

    	for ($i = 0; $i < count($b); $i++) {
    	    $data[] = [
    	        'id_absensi' => $id[$i],
    	        'kehadiran' => $a[$i]
    	    ];
    	}

    	$model->updateMulti('data_absensi', $data);
		// print_r($data);
		// $model->updateMulti('data_absensi', $data, $where);
		
		return redirect()->to ('/Home/mpg');
	}

	public function cek_agenda(){
		if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 5) {
			$model = new M_model();
			$on = 'user.id_user=data_murid.guru_p';
			$id = session()->get('id');
    		$where=array('id_user'=>$id);
			$data['ca'] = $model->tampilW('user','data_murid',$on, $where);
			// print_r($data);
			echo view('header');
			echo view('menu');
			return view('v_ca',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_ca(){
		$model = new M_model();
		$date = $this->request->getPost('tgl');
		$murid = $this->request->getPost('idm');
		
		
		
		$on = 'user.id_user=data_murid.guru_p';
		$id2 = session()->get('id');
    	$where=array('guru_p'=>$id2);
		$data['mp']= $model->tampilW('user','data_murid',$on, $where);
		
		$data['pm']= $model->filter5('data_agenda',$murid, $date);

		// $data['mm'] = $model->join2('user', 'data_murid', $on, $where);

		$mergedArray = array_merge($data['mp'], $data['pm']);
    	$data['ma'] = $mergedArray;


		// print_r($data['pm']);
		echo view('header');
		echo view('menu');
		return view('v_oca', $data);
		echo view('footer');
	}

	public function det_ca($id){
		if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 5) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['s'] = $model->getWhere('data_agenda',$where);
			echo view ('header');
			echo view ('menu');
			echo view ('v_detca', $data);
			echo view ('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	// Instruktur
	public function t_instruktur(){
		if(session()->get('level')== 1 || session()->get('level')== 4) {
			$model = new M_model();
			$data['vi'] = $model->tampil('data_instruktur');
			echo view('header');
			echo view('menu');
			echo view('v_tinstruktur', $data);
			echo view('footer');
		}else{
		return redirect()->to('/Home');
		}
	}

	public function output_tinstruktur(){
		$a = $this -> request-> getPost('nm');
		$b = $this -> request-> getPost('nhp');
		$c = $this -> request-> getPost('np');
	
   		$id = session()->get('id');
		$data = array(
			'nm_instruktur' => $a,
			'no_hp' => $b,
			'nm_perusahaan' => $c,
			'user' => $id
		);
		$model = new M_model();	
		$model->simpan('data_instruktur',$data);
		return redirect()->to ('/Home/detail');
	}

	public function e_instruktur($id){
		if(session()->get('level')== 1 || session()->get('level')== 4) {
			$model = new M_model();
			$where = array('id_instruktur'=>$id);
			$data['s'] = $model->getWhere('data_instruktur',$where);
			echo view ('header');
			echo view ('menu');
			echo view ('v_einstruktur', $data);
			echo view ('footer');
		}else{
		return redirect()->to('/Home');
		}
	}

	public function search3(){
		$model = new M_model();
		$date = $this->request->getPost('tgl');
		$murid = $this->request->getPost('idm');
		
		
		
		$on = 'user.id_user=data_murid.instruktur';
		$id2 = session()->get('id');
    	$where=array('instruktur'=>$id2);
		$data['mp']= $model->tampilW('user','data_murid',$on, $where);
		
		$data['pm']= $model->filter5('data_agenda',$murid, $date);

		// $data['mm'] = $model->join2('user', 'data_murid', $on, $where);

		$mergedArray = array_merge($data['mp'], $data['pm']);
    	$data['ma'] = $mergedArray;


		// print_r($data['pm']);
		echo view('header');
		echo view('menu');
		return view('mpg4v', $data);
		echo view('footer');
	}

	public function ct($id){
		if(session()->get('level')== 1 || session()->get('level')== 4) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['s'] = $model->getWhere('data_agenda',$where);

			echo view('header');
			echo view('menu');
			return view('v_ct', $data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_ct1(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('pm1');
		$b = $this -> request-> getPost('pm2');
		$c = $this -> request-> getPost('pm3');
	
		$where = array('id_agenda'=>$id);
		$data = array(
			'pm1' => $a,
			'pm2' => $b,
			'pm3' => $c
		);
		$model = new M_model();	
		$model->qedit('data_agenda',$data,$where);
		// print_r($id);
		return redirect()->to('/Home/ct2/' .$id);
	}
	
	public function ct2($id){
		if(session()->get('level')== 1 || session()->get('level')== 4) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['s'] = $model->getWhere('data_agenda',$where);

			echo view('header');
			echo view('menu');
			return view('v_ct2', $data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_ct2(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('c1');
		$b = $this -> request-> getPost('c2');
		$c = $this -> request-> getPost('c3');
	
		$where = array('id_agenda'=>$id);
		$data = array(
			'c1' => $a,
			'c2' => $b,
			'c3' => $c
		);
		$model = new M_model();	
		$model->qedit('data_agenda',$data,$where);
		// print_r($id);
		return redirect()->to('/Home/ct3/' .$id);
	}
	
	public function ct3($id){
		if(session()->get('level')== 1 || session()->get('level')== 4) {
			$model = new M_model();
			$where = array('id_agenda'=>$id);
			$data['s'] = $model->getWhere('data_agenda',$where);
			
			echo view('header');
			echo view('menu');
			return view('v_ct3', $data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_ct3(){
		$id = $this -> request-> getPost('id');
		$a = $this -> request-> getPost('kt1');
		$b = $this -> request-> getPost('kt2');
		$c = $this -> request-> getPost('kt3');
		$d = $this -> request-> getPost('kt4');
		$e = $this -> request-> getPost('kt5');
	
		$where = array('id_agenda'=>$id);
		$data = array(
			'senyum' => $a,
			'keramahan' => $b,
			'penampilan' => $c,
			'komunikasi' => $d,
			'realisasi_kerja' => $e
		);
		$model = new M_model();	
		$model->qedit('data_agenda',$data,$where);
		return redirect()->to('/Home/search3');
	}

	// Kajur
	public function kajur1(){
		if(session()->get('level')== 1 || session()->get('level')== 5 ) {
			$model = new M_model();
			$on = 'user.level=level.id_level';
			$on2 = 'data_guru.user=user.id_user';
			$where = array('level'=>2);
			$data['kajur1'] = $model->tampilWH('user', 'level', 'data_guru', $on, $on2, $where);
			echo view ('header');
			echo view ('menu');
			return view('kajur1', $data);
			echo view ('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
	
	public function kajur2(){
		if(session()->get('level')== 1 || session()->get('level')== 5 ) {
			$model = new M_model();
			$on = 'user.level=level.id_level';
			$on2 = 'data_instruktur.user=user.id_user';
			$where = array('level'=>4);
			$data['kajur2'] = $model->tampilWH('user', 'level', 'data_instruktur', $on, $on2, $where);
			echo view ('header');
			echo view ('menu');
			return view('kajur2', $data);
			echo view ('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function as(){
		if(session()->get('level')== 1 || session()->get('level')== 5 ) {
			echo view('header');
			echo view('menu');
			echo view('v_as');
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
	
	public function aksi_as(){
		$major = $this->request->getPost('jrsn');
		
		$model = new M_model();
		$where = array('jurusan'=>$major);
		$data['tw'] = $model->tampilWhere('data_murid', $where);

		// print_r($data);
		echo view('header');
		echo view('menu');
		return view('v_as2', $data);
		echo view('footer');
	}

	public function assign($id){
		if(session()->get('level')== 1 || session()->get('level')== 5 ) {
			$model = new M_model();
			$where = array('id_data'=>$id);
			$data['s'] = $model->getWhere('data_murid',$where);
			// print_r($data);
			echo view ('header');
			echo view ('menu');
			echo view ('v_assign', $data);
			echo view ('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function output_assign(){
		$id = $this->request->getPost('id');
		$a = $this->request->getPost('g');
		$b = $this->request->getPost('i');

		$model=new M_model();
		$where2=array('id_data'=>$id);
		$data2 = array(
			'guru_p' => $a,
			'instruktur' => $b
		);
		// print_r($data2);
		$model->qedit('data_murid', $data2,$where2);
		return redirect()->to('/home/aksi_as');
	}

}
