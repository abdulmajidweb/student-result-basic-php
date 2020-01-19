<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Class Six | Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
</head>
<body class="alert-primary">
   
    <!--coding start-->
    <div class="container-fluid alert alert-primary">
        <!--form fill up msg div-->
        <div class="alert alert-info" role="alert">
            <p class="h4">Please, fill in the all inputs.</p>
        </div>
        
        <!--form-->
        <div class="alert alert-success" role="alert">
            <form action="<?php echo htmlspecialchars('ClassSixResult.php');?>" method="POST">
                <!--bangla 1st paper-->
                <div class="row">
                    <p class="col-12">Bangla 1st Paper</p>
                    <!--bangla 1st paper srijonshil-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="bangla1stSrijonshil" class="form-control" placeholder="Srijonshil" required="" min="0" max="70">
                    </div>
                    <!--bangla 1st paper mcq-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="bangla1stMcq" class="form-control" placeholder="MCQ" required="" min="0" max="30">
                    </div>
                </div>
                
                <!--bangla 2nd paper-->
                <div class="row">
                    <p class="col-12">Bangla 2nd Paper</p>
                    <div class="col form-group">
                    <input type="number" name="bangla2nd" class="form-control" placeholder="Bangla 2nd paper" required="" min="0" max="50">
                    </div>
                </div>
                
                <!--Enligh 1st paper-->
                <div class="row">
                    <p class="col-12">Enlish 1st Paper</p>
                    <!--English 1st paper-->
                    <div class="col form-group">
                    <input type="number" name="english1st" class="form-control" placeholder="Enlish 1st Paper" required="" min="0" max="100">
                    </div>
                </div>
                
                <!--Enligh 2nd paper-->
                <div class="row">
                    <p class="col-12">Enlish 2nd Paper</p>
                    <!--English 2nd paper-->
                    <div class="col form-group">
                    <input type="number" name="english2nd" class="form-control" placeholder="Enlish 2nd Paper" required="" min="0" max="50">
                    </div>
                </div>
                
                <!--Mathematics-->
                <div class="row">
                    <p class="col-12">Mathematics</p>
                    <!--Mathematics srijonshil-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="mathematics1stSrijonshil" class="form-control" placeholder="Srijonshil" required="" min="0" max="70">
                    </div>
                    <!--Mathematics mcq-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="mathematics1stMcq" class="form-control" placeholder="MCQ" required="" min="0" max="30">
                    </div>
                </div>
                
                <!--Science-->
                <div class="row">
                    <p class="col-12">Science</p>
                    <!--Science srijonshil-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="scienceSrijonshil" class="form-control" placeholder="Srijonshil" required="" min="0" max="70">
                    </div>
                    <!--Science mcq-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="scienceMcq" class="form-control" placeholder="MCQ" required="" min="0" max="30">
                    </div>
                </div>
                
                <!--Bangladesh and global studies-->
                <div class="row">
                    <p class="col-12">Bangladesh and global studies</p>
                    <!--Bangladesh and global studies srijonshil-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="bangladeshSrijonshil" class="form-control" placeholder="Srijonshil" required="" min="0" max="70">
                    </div>
                    <!--Bangladesh and global studies mcq-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="bangladeshMcq" class="form-control" placeholder="MCQ" required="" min="0" max="30">
                    </div>
                </div>
                
                <!--Agriculture-->
                <div class="row">
                    <p class="col-12">Agriculture</p>
                    <!--Agriculture srijonshil-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="agricultureSrijonshil" class="form-control" placeholder="Srijonshil" required="" min="0" max="70">
                    </div>
                    <!--Agriculture mcq-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="agricultureMcq" class="form-control" placeholder="MCQ" required="" min="0" max="30">
                    </div>
                </div>
                
                <!--Islam/Hindu religion and moral education-->
                <div class="row">
                    <p class="col-12">Islam/Hindu religion and moral education</p>
                    <!--Islam/Hindu religion and moral education srijonshil-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="religionSrijonshil" class="form-control" placeholder="Srijonshil" required="" min="0" max="70">
                    </div>
                    <!--Islam/Hindu religion and moral education studies mcq-->
                    <div class="col-sm-6 form-group">
                    <input type="number" name="religionMcq" class="form-control" placeholder="MCQ" required="" min="0" max="30">
                    </div>
                </div>
                
                <!--Work and Life Oriented Education-->
                <div class="row">
                    <p class="col-12">Work and Life Oriented Education</p>
                    <!--Work and Life Oriented Education-->
                    <div class="col form-group">
                    <input type="number" name="workLife" class="form-control" placeholder="Enlish 2nd Paper" required="" min="0" max="50">
                    </div>
                </div>
                
                <!--Arts and crafts-->
                <div class="row">
                    <p class="col-12">Arts and crafts</p>
                    <!--Arts and crafts-->
                    <div class="col form-group">
                    <input type="number" name="artsCrafts" class="form-control" placeholder="Enlish 2nd Paper" required="" min="0" max="50">
                    </div>
                </div>
                
                <!--Physical Education-->
                <div class="row">
                    <p class="col-12">Physical Education</p>
                    <!--Physical Education-->
                    <div class="col form-group">
                    <input type="number" name="physical" class="form-control" placeholder="Enlish 2nd Paper" required="" min="0" max="50">
                    </div>
                </div>
                
                <!--ICT-->
                <div class="row">
                    <p class="col-12">ICT</p>
                    <!--ICT-->
                    <div class="col form-group">
                    <input type="number" name="ict" class="form-control" placeholder="Enlish 2nd Paper" required="" min="0" max="50">
                    </div>
                </div>
                
                
                <!--submit button-->
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!--footer-->
    <footer>
        <p class="ml-2"><span class="font-weight-bold font-weight-light">Developed</span> by <a href="https://www.facebook.com/server6666/">Abdul Majid</a></p>
    </footer>

    <!--bootstrap js-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
</body>
</html>