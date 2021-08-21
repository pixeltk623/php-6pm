<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center text-primary">ABC Pvt Ltd. Salary Slip</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post">
                    <div class="form-group">
                        <label class="mb-2">Employee Name</label>
                        <input type="text" name="ename" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Deapartemnt</label>
                        <select class="form-control" name="dept">
                            <option value="IT">IT</option>
                            <option value="Sales">Sales</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Application">Application</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Position</label>
                        <select class="form-control" name="position">
                            <option value="Developer">Developer</option>
                            <option value="Sales Manager">Sales Manager</option>
                            <option value="Marketing Manager">Marketing Manager</option>
                            <option value="Team Lead">Team Lead</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Basic Salary</label>
                        <input type="number" name="base" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" name="submit" value="Generate Salary Slip">
                </form>
            </div>
            <div class="col-sm-6">
                <?php 
                    if (isset($_POST['submit'])) {

                    $employeeName = $_POST['ename'];
                    $department = $_POST['dept'];
                    $position = $_POST['position'];
                    $baseSalary = $_POST['base'];

                    $hra = ($baseSalary*25)/100;
                    $sa = ($baseSalary*10)/100;
                    $ca = ($baseSalary*5)/100;
                    $asa = ($baseSalary*15)/100;
                    $pt = 200;
                    $esic=($baseSalary*4)/100;  

                    if ($baseSalary<5000) {
                        $pf = 0;
                    } else if($baseSalary>=5000 && $baseSalary<10000) {
                        $pf =($baseSalary*7)/100;
                    } else if($baseSalary>=10000 && $baseSalary<15000) {
                        $pf =($baseSalary*10)/100;
                    } else if($baseSalary>=15000 && $baseSalary<20000) {
                        $pf =($baseSalary*15)/100;
                    } else if($baseSalary>=20000 && $baseSalary<50000) {
                        $pf =($baseSalary*20)/100;
                    } else {
                        $pf =($baseSalary*25)/100;
                    }

                    $grossEarning = $baseSalary  +$hra + $sa + $ca + $asa;
                    $grossDeducation = $pf + $pt + $esic;
                    $netPay = $grossEarning - $grossDeducation;
                    $grossSalary = $grossEarning + $grossDeducation;

                ?>

                <table class="table table-bordered">
                    <tr>
                        <td colspan="4">ABC Pvt Ltd</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="4">PlaySlip For Aug 2021</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo (isset($employeeName)) ? $employeeName : '' ?></td>
                        <td>Department</td>
                        <td><?php echo (isset($department)) ? $position : '' ?></td>
                    </tr>
                    <tr>
                        <td>Position</td>
                        <td><?php echo (isset($position)) ? $position : '' ?></td>
                        <td>Month</td>
                        <td>August</td>
                    </tr>
                    <tr></tr>
                    
                </table>
                <table class="table table-bordered table-sm">
                    <tr>
                        <th>Earning</th>
                        <th>Amount in Rs.</th>
                        <th>Deducations</th>
                        <th>Amount in Rs.</th>
                    </tr>
                    <tr>
                        <td>BASIC</td>
                        <td><?php echo (isset($baseSalary)) ? $baseSalary : '' ?></td>
                        <td>PROVIDENT FUND</td>
                        <td><?php echo (isset($pf)) ? $pf : '' ?></td>
                    </tr>
                    <tr>
                        <td>HRA</td>
                        <td><?php echo (isset($hra)) ? $hra : '' ?></td>
                        <td>PROFESSIONAL TAX</td>
                        <td><?php echo (isset($pt)) ? $pt : '' ?></td>
                    </tr>
                    <tr>
                        <td>SA</td>
                        <td><?php echo (isset($sa)) ? $sa : '' ?></td>
                        <td>ESIC</td>
                        <td><?php echo (isset($esic)) ? $esic : '' ?></td>
                    </tr>
                    <tr>
                        <td>CA</td>
                        <td><?php echo (isset($ca)) ? $ca : '' ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>ASA</td>
                        <td><?php echo (isset($asa)) ? $asa : '' ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>GROSS EARNING</th>
                        <td><?php echo (isset($grossEarning)) ? $grossEarning : '' ?></td>
                        <th>GROSS DEDUCATIONS</th>
                        <td><?php echo (isset($grossDeducation)) ? $grossDeducation : '' ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: right;">NET PAY</th>
                        <td colspan="2"><?php echo (isset($netPay)) ? $netPay : '' ?></td>
                    </tr>
                </table>
                <?php
                    }
                ?>
                <div class="text-center">
                    <button class="btn btn-success">Download Salary Slip</button>
                </div>
            </div>
        </div>
        
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>