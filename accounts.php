<?php
require_once 'config.php';    //include config file
session_start();
if(isset($_SESSION['userid']))
{
if(($_SESSION['type']==0) || (($_SESSION['type']==1) && ($_SESSION['staffid']==1)))			//only admin and accounts staff allowedstaff allowed
{

 require_once 'smartyhead.php';   //include smarty lib
 require_once 'helper/Validation.php';  //email validation
 //require_once 'library/charts/fusioncharts.php';   //including library for charts
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->assign('JS_URL', JS_URL);
 $smarty->assign('LIBRARY_URL', LIBRARY_URL);
 
 $smarty->display('header.tpl');
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');

  if(isset($_POST['show_all_expense']))
  		{	
		
			$expense=new expenses();
			$allExpenses=$expense->getAll('*','id');
			$smarty->assign('allExpenses',$allExpenses);
			/*$a = $expense->getA();
			$array['chart'] = array("caption"=> "daily expenses",
									"subCaption"=> "Astar Transports",
									"xAxisName"=> "Days",
									"yAxisName"=> "Expense (In Rs.)",
									"numberPrefix"=> "Rs. ",
									"paletteColors"=> "#0075c2",
									"bgColor"=> "#ffffff",
									"borderAlpha"=> "20",
									"canvasBorderAlpha"=> "0",
									"usePlotGradientColor"=> "0",
									"plotBorderAlpha"=> "10",
									"placeValuesInside"=> "1",
									"rotatevalues"=> "1",
									"valueFontColor"=> "#ffffff",
									"showXAxisLine"=> "1",
									"xAxisLineColor"=> "#999999",
									"divlineColor"=> "#999999",
									"divLineIsDashed"=> "1",
									"showAlternateHGridColor"=> "0",
									"subcaptionFontSize"=> "14",
									"subcaptionFontBold"=>"0");
				
							
				foreach($a as $b)
				 $array['data'][] = $b;*/

		}
	if(isset($_POST['orderByValue']))
		{
			$expense=new expenses();
			$allExpenses=$expense->getAll('*','value');
			$smarty->assign('allExpenses',$allExpenses);
		}
		
	 if(isset($_POST['show_all_income']))
  		{	
			$income=new incomes();
			$allIncomes=$income->getAll();
			$smarty->assign('allIncomes',$allIncomes);
		}
		
	if(isset($_POST['show_all_profit']))
		{
			$income=new incomes();
			$total_income=$income->getTotalIncome();
			$expense=new expenses();
			$total_expense=$expense->getTotalExpense();
			$total_profit=$total_income - $total_expense;
			$smarty->assign('totalProfit',$total_profit);
		}
	
	if(isset($_POST['show_total_expense']))
		{
			$expense=new expenses();
			$total_expense=$expense->getTotalExpense();
			$smarty->assign('totalExpense',$total_expense);
		}
		
	if(isset($_POST['show_total_income']))
		{
			$income=new incomes();
			$total_income=$income->getTotalIncome();
			$smarty->assign('totalIncome',$total_income);
		}
	
	if(isset($_POST['getExpense']))
		{
			if( ($_POST['ex_from']!=NULL) && ($_POST['ex_to']!=NULL) )
				{
					$expense=new expenses();
					$expenses_bet = $expense->getExpenseBetween($_POST['ex_from'],$_POST['ex_to']);
					$smarty->assign('expenses_bet',$expenses_bet);
				} else
					{
						echo "MESSAGE..enter complete info";				
					}
		}
	
	if(isset($_POST['getIncome']))
		{
			if( ($_POST['in_from']!=NULL) && ($_POST['in_to']!=NULL) )
				{
					$income=new incomes();
					$incomes_bet = $income->getIncomeBetween($_POST['pr_from'],$_POST['pr_to']);
					$smarty->assign('incomes_bet',$incomes_bet);
				} else
					{
						echo "MESSAGE..enter complete info";				
					}
		}
		
	if(isset($_POST['getProfit']))
		{
			if( ($_POST['pr_from']!=NULL) && ($_POST['pr_to']!=NULL) )
				{
					$income=new incomes();
					$incomes_bet = $income->getIncomeOnlyBetween($_POST['pr_from'],$_POST['pr_to']);
					$expense=new expenses();
					$expenses_bet = $expense->getExpenseOnlyBetween($_POST['pr_from'],$_POST['pr_to']);
					$profit_bet= $incomes_bet - $expenses_bet;
					$smarty->assign('profit_bet',$profit_bet);
				} else
					{
						echo "MESSAGE..enter complete info";				
					}
		}
/*$chart= new charts();
$expense= new expenses();
$values=$expense->getAll('value');
$a = $expense->getA();
$array['chart'] = array("caption"=> "daily expenses",
						"subCaption"=> "Astar Transports",
                    	"xAxisName"=> "Days",
						"yAxisName"=> "Expense (In Rs.)",
						"numberPrefix"=> "Rs. ",
						"paletteColors"=> "#0075c2",
						"bgColor"=> "#ffffff",
						"borderAlpha"=> "20",
						"canvasBorderAlpha"=> "0",
						"usePlotGradientColor"=> "0",
						"plotBorderAlpha"=> "10",
						"placeValuesInside"=> "1",
						"rotatevalues"=> "1",
						"valueFontColor"=> "#ffffff",
						"showXAxisLine"=> "1",
						"xAxisLineColor"=> "#999999",
						"divlineColor"=> "#999999",
						"divLineIsDashed"=> "1",
						"showAlternateHGridColor"=> "0",
						"subcaptionFontSize"=> "14",
						"subcaptionFontBold"=>"0");


 
foreach($a as $b)
 $array['data'][] = $b;

$chart->makeChart("Column2D", "myFirstChart" , 600, 300, "chart-1", "json",
            json_encode($array));*/

 $smarty->display('accounts.tpl');
 $smarty->display('footer.tpl');   //include footer file
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>

  



