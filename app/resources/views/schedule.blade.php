@extends('LayoutHR')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= "{{ URL::asset('css/schedule.css'); }}">
    <title>Schedule - HRTechnologies</title>
</head>

<body>

    @section('content')

    <div class="month">
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
                August<br>
                <span style="font-size:18px">2021</span>
            </li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
    </ul>

    <ul class="days">
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li><span class="active">10</span></li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30</li>
        <li>31</li>
    </ul>

    <div class="info">
        <h2><u>August 10, 2021</u></h2>
        <h3>Scheduled Employees</h3>
            <p><strong>Ryan Kizy</p>
            <p><strong>Pasia Vang</p>
            <p><strong>Stephen Lewandowski</p>
            <p><strong>Humayun Rahman</p>
    </div>

</body>
@endsection
</html>
