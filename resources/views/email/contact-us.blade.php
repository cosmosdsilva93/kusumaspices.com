<div>
	<span>Hello Admin,</span><br>
	<span>Please find below a query from your website -</span>
</div>
<div style="padding: 2% 15%;">
	<div class="table-responsive">
		<table style="border: 1px solid black; border-collapse: collapse;" cellpadding="10">
			<thead>
				<th colspan="3" style="border: 1px solid black;text-align:center;background-color:#f15927;color:#ffffff;">Query</th>
			</thead>
			<tbody>
				<tr>
					<td style="border: 1px solid black;background-color:#f15927;color:#ffffff;"><strong>Name</strong></td>
					<td style="border: 1px solid black;" colspan="2">{{ $name }}</td>
				</tr>
				<tr>
					<td style="border: 1px solid black;background-color:#f15927;color:#ffffff;"><strong>Email</strong></td>
					<td style="border: 1px solid black;" colspan="2">{{ $email }}</td>
				</tr>
				<tr>
					<td style="border: 1px solid black;background-color:#f15927;color:#ffffff;"><strong>Message</strong></td>
					<td style="border: 1px solid black;" colspan="2">{{ $query }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>