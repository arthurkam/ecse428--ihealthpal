@extends('layouts.main')
@section('content')

<h2>Meal Plan Suggestions</h2>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#massGain" data-toggle="tab">Mass Gain Meal Plan</a></li>
  <li><a href="#weightLoss" data-toggle="tab">Weight Loss Meal Plan</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane active" id="massGain">
    <div class="row">
    ...
	</div>
  </div>
  
  <div class="tab-pane" id="weightLoss">
  <div class="row">
	  <div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><font size="5"><b>Weight Loss Meal Plan</b></font></div>
	  <div class="panel-body">
	    <p><font size="3">The overall goal of this meal plan is to lower your consumption of sodium, which aids in lowering your blood pressure. Since the diet focuses on eating the right foods with the right portions, it's also effective for short- and long-term weight loss</font></p>
	  </div>
	
	  <!-- Table -->
	  <table class="table">
	    <tr>
	      <td width="50">     </td>
		  <td width="100"><b>Day 1</b></td>
		  <td width="100"><b>Day 2</b></td> 
		  <td width="100"><b>Day 3</b></td>
		  <td width="100"><b>Day 4</b></td>
		  <td width="100"><b>Day 5</b></td>
		  <td width="100"><b>Day 6</b></td>
		  <td width="100"><b>Day 7</b></td>
		</tr>
		<tr>
		  <td><b>Breakfast</b></td>
		  <td>
		  <li>Hard-boiled Egg</li>
		  <li>1-2 slices Canadian bacon</li>
		  <li>6 ounces tomato juice, low-sodium</li>
		  </td>
		  <td>
		  <li>Mini-Egg Beaters Southwestern Style omelet</li>
		  <li>4-6 ounces tomato juice, low-sodium</li></td> 
		  <td>
		  <li>Scrambled eggs</li>
		  <li>1-2 slices Canadian bacon</li>
		  <li>4-6 ounces diet cranberry juice</li></td>
		  <td>
		  <li>3/4 cup Wheaties</li>
		  <li>8 ounces skim milk</li>
		  <li>4-6 ounces strawberries or raspberries</li></td>
		  <td>
		  <li>Hot chocolate (8 ounces skimmed milk + 1 heaping teaspoon unsweetened cocoa + 2 packets Splenda)</li>
		  <li>1-2 hard-boiled eggs</li>
		  <li>6-8 ounces light cranberry juice</li>
		  <li>4-6 ounces strawberries</li></td>
		  <td>
		  <li>1/2 cup oatmeal with toppings you like</li>
		  <li>1/2 banana</li>
		  <li>4-6 ounces tomato juice (low sodium)</li>
		  <li>Latte (8 ounces skim milk, 2 ounces espresso)</li></td>
		  <td>
		  <li>1-3 scrambled eggs</li>
		  <li>1 slice whole-wheat toast</li>
		  <li>1 tablespoon jelly or jam</li>
		  <li>4-6 ounces orange juice</li>
		  <li>Latte or 8 ounces skim milk</li></td>
		</tr>
		<tr>
		  <td><b>Midmorning Snack</b></td>
		  <td><li>1 stick light cheese</li></td>
		  <td>
		  <li>1 light cheese wedge</li>
		  <li>6 grape tomatoes</li></td> 
		  <td>
		  <li>4 ounces raspberry light yogurt (nonfat)</li>
		  <li>23 almonds (1/4 cup)</li></td>
		  <td>
		  <li>1-2 light cheese wedges</li>
		  <li>Grape tomatoes</li></td>
		  <td>
		  <li>6 ounces key lime light yogurt (nonfat)</li>
		  <li>10 ounces almonds</li></td>
		  <td>
		  <li>1 stick light cheese</li>
		  <li>Baby carrots</li></td>
		  <td>
		  <li>4-6 ounces blueberries</li>
		  <li>10 almonds</li></td>
		</tr>
		<tr>
		  <td><b>Lunch</b></td>
		  <td><li>Tuna Salad</li>
		  <li>Cherry tomatoes</li>
		  <li>Small side salad (Italian Dressing/Vinegar Dressing)</li>
		  <li>Strawberry Jell-O cup, sugar free</li></td>
		  <td>
		  <li>2-3 Turkey-Swiss-roll-ups</li>
		  <li>1/2-1 cup coleslaw</li>
		  <li>Raw snow peas OR sugar snap pea pods</li>
		  <li>Orange Jell-O cup, sugar free</li></td> 
		  <td>
		  <li>Cold fried chicken breast (No skin or coating)</li>
		  <li>Coleslaw</li>
		  <li>Baby carrots</li>
		  <li>Lemon Jell-O cup, sugar-free</li></td>
		  <td>
		  <li>2-3 turkey and Swiss roll-ups</li>
		  <li>Baby carrots</li>
		  <li>Small plum</li></td>
		  <td>
		  <li>Turkey and Swiss sandwich</li>
		  <li>Pepper stips</li>
		  <li>Coleslaw or side salad</li>
		  <li>Raspberry Jell-O cup, sugar free</li></td>
		  <td>
		  <li>Tuna Salad</li>
		  <li>Sliced bell peppers</li>
		  <li>Orange Jell-O cup, sugar free</li></td>
		  <td>
		  <li>203 Muenster cheese and roast beef roll-ups</li>
		  <li>Italian coleslaw</li>
		  <li>Small peach</li></td>
		</tr>
		<tr>
		  <td><b>Midafternoon Snack</b></td>
		  <td><li>Pepper strips</li>
		  <li>2 ounces guacamole (1/4 cup)</li></td>
		  <td>
		  <li>1 stick light cheese</li>
		  <li>Baby carrots</li></td> 
		  <td>
		  <li>1-2 light cheese wedges</li>
		  <li>6 grape tomatoes</li></td>
		  <td>
		  <li>6 ounces blueberry light yogurt</li>
		  <li>10 cashews</li></td>
		  <td>
		  <li>1 clementine oragne</li>
		  <li>1-2 light cheese wedges</li></td>
		  <td>
		  <li>4-6 ounces strawberries</li>
		  <li>10 cashews</li></td>
		  <td>
		  <li>6 ounces strawberry light yogurt (nonfat)</li></td>
		</tr>
		<tr>
		  <td><b>Dinner</b></td>
		  <td><li>Grilled Chicken</li>
		  <li>1 cup mixed carrots, broccoli, and cauliflower blend</li>
		  <li>Salad: Romaine blend with Italian Dressing</li>
		  <li>Raspberry Jell-O cup, sugar free</li></td>
		  <td>
		  <li>Roasted sliced turkey</li>
		  <li>8 ounces sautéed carrots and 1 medium onion</li>
		  <li>Side salad topped with Italian Dressing</li>
		  <li>Lime Jell-O cup, sugar free</li></td> 
		  <td>
		  <li>1lb. extra-lean ground sirloin with seasoning</li>
		  <li>1 cup broccoli</li>
		  <li>Side salad with balsamic dressing</li>
		  <li>1-2 strawberry Jell-O cups, sugar-free</li></td>
		  <td>
		  <li>Pan-seared tilapia</li>
		  <li>mango-Melon Salsa</li>
		  <li>Fresh asparagus</li>
		  <li>Strawberry Jell-O cup, sugar free</li></td>
		  <td>
		  <li>Meat sauce spaghetti</li>
		  <li>Side salad (Italian, Oil and Vinegar, or Vinaigrette dressing)</li>
		  <li>Fudge bar</li></td>
		  <td>
		  <li>Chicken Piccata (No skin)</li>
		  <li>Green beans</li>
		  <li>Sliced tomatoes</li>
		  <li>Side salad with Italian Dressing</li>
		  <li>4-6 ounces raspberries on 1/2-1 cup of yogurt (nonfat)</li></td>
		  <td>
		  <li>Zucchini Lasagna</li>
		  <li>Salad: Lettuce, grape tomatoes, red cabbage and goat cheese with Oil and Vinegar dressing</li>
		  <li>Fudge bar or other low-fat ice cream bar</li></td>
		</tr>
	  </table>
	</div>
  </div>
</div>
</div>
        
      

@stop