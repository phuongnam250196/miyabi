<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Miyabi Mail</title>

</head>
<body>
	<table id="tb" width="650" style="border: 1px solid #ddd; margin: 0 auto; font-size: 16px;" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2" style="background: #eec747;color:#fff; text-align: center;padding-top: 10px;padding-bottom: 10px;text-transform: uppercase;">Miyabi Booking</td>
		</tr>
		<tr>
			<td style="padding: 5px 15px;padding-top: 30px;width: 35%;">Người đặt</td>
			<td style="padding-top: 30px;width: 65%;">{{ $data['name'] }}</td>
		</tr>
		<tr>
			<td style="padding: 5px 15px;">Số lượng</td>
			<td>{{ $data['number'] }}</td>
		</tr>
		<tr>
			<td style="padding: 5px 15px;">Số điện thoại</td>
			<td>{{ $data['phone'] }}</td>
		</tr>
		<tr>
			<td style="padding: 5px 15px;">Nội dung</td>
			<td>{{ $data['order'] }}</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;padding-bottom: 15px;padding-top: 10px;">Quay lại: <a href="#" style="text-decoration: none;">miyabi</a></td>
		</tr>
	</table>
</body>
</html>