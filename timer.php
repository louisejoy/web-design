<?php
session_start();
    $id = $_SESSION['stud_no'];
	if(!isset($id)){
            header("location:index.php");
	}else{
	if(isset($_GET['exam'])){
            $exam = $_GET['exam'];
            }
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
        <script type="text/javascript" src="React/react-0.14.3/build/react.js"></script>
        <script type="text/javascript" src="React/react-0.14.3/build/react-dom.js"></script>
           <script type="text/javascript">
            	function countdown(){
            		var i = document.getElementById('counter');
            		if(parseInt(i.innerHTML)<=0){
            			document.getElementById("a").disabled = true;
            			document.getElementById("b").disabled = true;
            			document.getElementById("c").disabled = true;
            			document.getElementById("d").disabled = true;

            		}
            		i.innerHTML = parseInt(i.innerHTML)-1;
            	}
            	setInterval(function(){countdown();},1000); //eto yung timer ata
            </script>
    </head>
    <body>
        <div id="container">
            <p>dito ka maglalagay ng paragraph/Exam ng student</p>
            <form action="" method="POST">
                <input type="submit" name="start" value="Start"/><br><br>
                 <a href="logout.php">logout</a>
            </form>
        </div>
        
        <?php
            if(isset($_POST['start'])){
                echo "<script>
                        var ExampleApplication = React.createClass({
                            render: function() {
                                var elapsed = Math.round(this.props.elapsed  / 100);
                                var seconds = elapsed / 10 + (elapsed % 10 ? '' : '.0' );
                                var message = 'React has been successfully running for ' + seconds + ' seconds.';
                                
                                // dito mo ilalagay yung gusto mong mangyari kapag times up na
                                // 3 seconds ang example
                                if(seconds==3.0){
                                    alert('TIMES UP!');
                                }
                            }
                        });

                        // Call React.createFactory instead of directly call ExampleApplication({...}) in React.render
                        var ExampleApplicationFactory = React.createFactory(ExampleApplication);

                        var start = new Date().getTime();
                            setInterval(function() {
                                ReactDOM.render(
                                ExampleApplicationFactory({elapsed: new Date().getTime() - start}),
                                document.getElementById('container')
                            );
                        }, 50);
                    </script>";
            }
        ?>
         <tr>
            <td colspan="4"><p>NEXT QUESTION IN: &nbsp;<span id="counter">21</span>&nbsp;sec</p></td>
         </tr>
         <?php 
         	$query = $connect->query("SELECT * FROM test WHERE exam_code = '$exam' ORDER BY rand() limit 1");
         	$row = mysqli_fetch_assoc($query);
         		$q = $row['test_question'];
         		$c = $row['correct_answer'];
         		$o2 = $row['option_2'];
         		$o1 = $row['option_1'];
         		$o3 = $row['option_3'];
          ?>
         <table>
          <form method="POST">
         <tr>
         	<td colspan="4">QUESTION NO.1: &nbsp;<input type="text" name="qid" value="<?php echo $q; ?>"></td>
         </tr>
         <tr>
         	<td><input id="a" type="radio" name="answer" value="<?php echo $c; ?>"><?php echo $c; ?></td>
         	<td><input d="b" type="radio" name="answer" value="<?php echo $o1; ?>"><?php echo $o1; ?></td>
         	<td><input d="c" type="radio" name="answer" value="<?php echo $o2; ?>"><?php echo $o2; ?></td>
         	<td><input d="d" type="radio" name="answer" value="<?php echo $o3; ?>"><?php echo $o3; ?></td>
         </tr>
         <tr>
         	<td colspan="4" align="center"><input type="submit" name="nq" value="next question"></td>
         </tr>
         </form>
         <?php 
         if(isset($_POST['nq'])){
         	$prevquestion = $_POST['qid'];
         	$answer 	  = $_POST['answer'];

         	$_SESSION['answer'] = $answer;
         	$_SESSION['pq'] = $prevquestion;

         	$_SESSION['exam'] = $exam;
         	header("location:student.php");
         }
          ?>
 	</table>
    </body>
</html>
