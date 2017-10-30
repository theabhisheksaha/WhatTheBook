<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['usernm']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					if($_SESSION['uid']!="aditi")
					{
						header("location:home.php");
					}
					else if($_SESSION['unm']="nilesh")
					{
						header("location:admin/all_book.php");
					}
					else
					{
						header("location:home.php");
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				$r="select * from admin where u_unm='$unm'";
			
			$res=mysqli_query($conn,$r) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					header("location:admin/all_book.php");
				}
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
			
		}
	
	}
	}
	else
	{
		header("location:login.php");
	}
			
?>