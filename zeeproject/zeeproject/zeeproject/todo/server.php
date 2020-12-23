<?php
session_start();
include('../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
    case 'add_todo':{
        $task_name=$_REQUEST['task_name'];
        $task_date=$_REQUEST['task_date'];
        $description=$_REQUEST['description'];
        //insert to do
        $get="SELECT * FROM add_todo where task_name='$task_name'";
        $getrow=mysqli_query($conn,$get) or die(mysqli_error($conn));
        if(mysqli_num_rows($getrow)>0){
            $_SESSION['task_already_created']="Task already Exist";
            header('location:add_todo.php');

        }
        else{
            $sql="insert into add_todo (task_name,task_date,task_description) 
                values('$task_name','$task_date','$description')";
            $query=mysqli_query($conn,$sql);
            if(!$query){
                $_SESSION['task_notinsert']="Task not Inserted";
                header('location:add_todo.php');
            }
            else{
                $_SESSION['task_insert']="Task Inserted";
                header('location:add_todo.php');
            }
        }
    }
        break;
    case'delete_task':{
        $t_id=$_REQUEST['id'];
        $sql="delete from add_todo where id=$t_id";
        if(mysqli_query($conn,$sql)){
            echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Task Deleted</label></div>';

        }
        else{
            echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Task not Delete</label></div>';

        }

    }
        break;
    case'edit_task':{
        $t_id=$_REQUEST['id'];
        $t_name=$_REQUEST['task_name'];
        $t_date=$_REQUEST['task_date'];
        $t_description=$_REQUEST['description'];
        $sql="UPDATE add_todo SET task_name ='$t_name',task_date='$t_date',task_description='$t_description' WHERE id='$t_id'";
        if(mysqli_query($conn,$sql))
        {
            $_SESSION['task_update']="Task Updated";
            header('location:all_tasks.php');
        }
        else{
            $_SESSION['task_notupdate']="Task Not Update";
            header('location:all_tasks.php');
        }

    }
        break;
    default:{
        echo"ERROR";
    }
        break;
}
?>