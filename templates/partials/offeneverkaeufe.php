<div id="verkauefe">

	<h1 class="heading">Offene Verkäufe</h1>

	<form>
		<table id="verkauefe">
			<tr>
				<th>Nr.</th>
				<th>Plattform</th>
				<th>Account</th>
				<th>Name</th>
				<th>Offenes Brutto</th>
				<th>Wertstellung</th>
				<th></th>
			</tr>
			<tr ng-repeat="verkauf in verkaeufe">

				<td class="nr">[[$index+1]]</td>

				<td class="plattform">[[verkauf.plattform]]</td>

				<td class="account">[[verkauf.account]]</td>

				<td class="name">[[verkauf.name]]</td>

				<td class="brutto">[[verkauf.bruttoTotal|number_de]] €</td>

				<td class="wertstellung">[[ verkauf.wertstellung | date:'dd.MM.yyyy' ]]</td>

				<td style="height: 37px;"><a class="button" href="#/verkauf/[[verkauf.vkId]]">zum Verkauf</a></td>

			</tr>

		</table>
	</form>
</div>



