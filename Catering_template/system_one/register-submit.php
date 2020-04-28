<?php include ("db_con.php"); 

//Function to add New Member
function insert_new_member($link,$snm,$onm,$id_no,$employer,$gender,$yr_of_birth,$marital_status,$religion,$county,$lctn,$sub_lctn,$address,$em,$password,$pass_gen,$tphn_hm,$mobile_phn,$bank_name,$bank_ac,$kin_nm,$kin_id_no,$kin_rltp,$kin_phn,$kin_address,$kin_em,$member_id_pik){
	
	   $sql = mysqli_query($link,"INSERT INTO members(snm,onm,id_no,employer,gender,yr_of_birth,marital_status,religion,county,lctn,sub_lctn,address,em,password,pass_gen,tphn_hm,mobile_phn,bank_name,bank_ac,kin_nm,kin_id_no,kin_rltp,kin_phn,kin_address,kin_em,da,status) VALUES ('".$snm."','".$onm."','".$id_no."','".$employer."','".$gender."','".$yr_of_birth."','".$marital_status."','".$religion."','".$county."','".$lctn."','".$sub_lctn."','".$address."','".$em."','".$password."','".$pass_gen."','".$tphn_hm."','".$mobile_phn."','".$bank_name."','".$bank_ac."','".$kin_nm."','".$kin_id_no."','".$kin_rltp."','".$kin_phn."','".$kin_address."','".$kin_em."',now(), 1)") or die (mysqli_error());
	
	$sql_insert = mysqli_query($link,"INSERT INTO access_levels(member_id,members_module,members_contributions_module,my_contributions_module,loan_application_module,loans_pending_approval_module,approved_loans_module,loan_repayment_module,paid_loans,loan_defaulters_module,members_statements_module,my_statements_module,income_module,expenses_module,reports_module,settings_module) VALUES ('".$member_id_pik."',0,0,1,0,0,0,0,0,0,0,1,0,0,0,0)") or die (mysqli_error());
			}

//Function to Edit Member
function edit_member($link,$snm,$onm,$id_no,$employer,$gender,$yr_of_birth,$marital_status,$religion,$county,$lctn,$sub_lctn,$address,$em,$password,$pass_gen,$tphn_hm,$mobile_phn,$bank_name,$bank_ac,$kin_nm,$kin_id_no,$kin_rltp,$kin_phn,$kin_address,$kin_em,$member_id) {
	
	    $sql = mysqli_query($link,"UPDATE members SET snm='".$snm."', onm='".$onm."', id_no='".$id_no."', employer='".$employer."',gender='".$gender."',yr_of_birth='".$yr_of_birth."', marital_status='".$marital_status."', religion='".$religion1."', county='".$county."', lctn='".$lctn."', sub_lctn='".$sub_lctn."', address='".$address."', em='".$em."', tphn_hm='".$tphn_hm."', mobile_phn='".$mobile_phn."', bank_name='".$bank_name."', bank_ac='".$bank_ac."', kin_nm='".$kin_nm."', kin_id_no='".$kin_id_no."', kin_rltp='".$kin_rltp."', kin_phn='".$kin_phn."', kin_address='".$kin_address."', kin_em='".$kin_em."' WHERE member_id='".$member_id."'") or die (mysqli_error());
	;
		
			}			

//Function to remove Member
function del_member($link,$member_id){
		
		$query = mysqli_query($link, "DELETE FROM members WHERE member_id='".$member_id."'") or die(mysqli_error());
	
			}
			
//Function to add New Contribution
function add_contribution($link,$member_id,$account_name,$bank_account,$payment_mode,$transaction_evident_no,$amount,$sessionID){
	
	   $sql = mysqli_query($link,"INSERT INTO contributions(member_id,account_name,bank_account,payment_mode,transaction_evident_no,amount,user_id,da) VALUES('".$member_id."','".$account_name."','".$bank_account."','".$payment_mode."','".$transaction_evident_no."','".$amount."','".$sessionID."',now())") or die (mysqli_error());
			}
			
//Function to Change Password
function change_password($link,$old_password,$e_password,$c_password,$sessionID) {
	
	$sql = mysqli_query($link,"UPDATE members SET password='".$e_password."' WHERE member_id='".$sessionID."'") or die (mysqli_error());
	;
			}

//Function to Update Contribution
function edit_contribution($link,$member_id,$contribution_id,$account_name,$bank_account,$payment_mode,$transaction_evident_no,$amount){
	
	$sql = mysqli_query($link,"UPDATE contributions SET account_name='".$account_name."', bank_account='".$bank_account."', payment_mode='".$payment_mode."', transaction_evident_no='".$transaction_evident_no."', amount='".$amount."' WHERE contribution_id='".$contribution_id."'") or die (mysqli_error());
			}		
			
//Function to Apply Loan
function add_apply_loan($link,$member_id,$loan_type,$loan_purpose,$loan_amount,$guarantee_nm,$guarantee_id_no,$guarantee_employer,$guarantee_address,$guarantee_email,$guarantee_tphn,$charge_nm,$charge_amount,$no_repayment,$time_intervals,$grace_period,$interest){
	
	  $sql = mysqli_query($link,"INSERT INTO loan_applications(member_id,loan_type,loan_purpose,loan_amount,repayment_amount,guarantee_nm,guarantee_id_no,guarantee_employer,guarantee_address,guarantee_email,guarantee_tphn,charge_nm,charge_amount,no_repayment,time_intervals,grace_period,interest,amount_paid,repayment_balance,loan_status,loan_da) VALUES ('".$member_id."','".$loan_type."','".$loan_purpose."','".$loan_amount."','".$loan_amount."','".$guarantee_nm."','".$guarantee_id_no."','".$guarantee_employer."','".$guarantee_address."','".$guarantee_email."','".$guarantee_tphn."','".$charge_nm."','".$charge_amount."','".$no_repayment."','".$time_intervals."','".$grace_period."','".$interest."','0','".$loan_amount."','pending',now())") or die (mysqli_error());
			}
			
//Function to Approve Loan
function approve_loan($link,$loan_id){
	
	$sql = mysqli_query($link,"UPDATE loan_applications SET loan_status='approved', date_approved=now() WHERE loan_id='".$loan_id."'") or die (mysqli_error());
	
			}		
			
//Function to pay Loan
function pay_loan($link,$loan_id,$installments,$payment_mode,$member_id){
	
	$sql = mysqli_query($link,"INSERT INTO loan_repayment(loan_id,member_id,installments,payment_mode,repayment_da) VALUES('".$loan_id."','".$member_id."','".$installments."','".$payment_mode."',now())") or die (mysqli_error());
	
	$la_query = mysqli_query($link, "SELECT * FROM loan_applications WHERE loan_id = '".$loan_id."'")or die (mysqli_error());
	while($la_row=mysqli_fetch_array($la_query)){
						$loan_id = $la_row['loan_id'];
						$amount_paid = $la_row['amount_paid'];
						$repayment_amount = $la_row['repayment_amount'];
						$update_amount_paid = $amount_paid + $installments;
						$query1 = mysqli_query($link, "UPDATE loan_applications SET amount_paid='".$update_amount_paid."' WHERE loan_id='".$loan_id."'") or die (mysqli_error()); 
						
	
		
		$query = mysqli_query($link, "SELECT * FROM loan_applications WHERE loan_id = '".$loan_id."'")or die (mysqli_error());
	while($row=mysqli_fetch_array($query)){
						$loan_id = $row['loan_id'];
						$repayment_balance = $row['repayment_balance'];
						$amount_paid1 = $row['amount_paid'];
						$repayment_amount1 = $row['repayment_amount'];
						$update_repayment_balance = $repayment_amount1 - $amount_paid1;
						$query2 = mysqli_query($link, "UPDATE loan_applications SET repayment_balance='".$update_repayment_balance."' WHERE loan_id='".$loan_id."'") or die (mysqli_error()); }
						
					
			}		}

?>