<div id="camp-app">
	<!-- Check angularjs is working if you get 3 that means angularjs working proper -->
    {{ 1 + 2 }}
    
    <div ng-controller="MyController">
    	<table>
    		<thead>
    			<tr>
    				<th>Title</th>
    				<th>Body</th>
    			</tr>
    		</thead>
    		<tbody ng-repeat="xcamp in teams.camps">
    			<tr>
    			<td>{{xcamp.camp.title}}</td>
                <td>{{xcamp.camp.body}}</td>
    			</tr>
    		</tbody>
    	</table>
    </div>


</div>