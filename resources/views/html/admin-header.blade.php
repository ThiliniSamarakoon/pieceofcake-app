<?php
    //Admin Menu bar
    ?>
    <div class="navbar">
        <ul>
            <li><img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo Icon" width="50" height="50" style="margin-top: 5px;">
            <li><button id="dashboard-button" type="button" onclick="window.location.href = '{{ route('admin.home') }}';">Dashboard</button></li>
            <li><button type="button" >Inventory</button></li>
            <li><button type="button">Products</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('admin.orders') }}';">Orders</button></li>
            <li><button type="button" >Delivery</button></li>
            <li><button type="button" >Reports</button></li>
            <li><button type="button" >Accounts</button></li>
            <li><button type="button" >Messages</button></li>

            <li class="top-right">
                <input type="text" placeholder="Search..." style="height:20px" >
                <img src="{{ asset('images/profile_icon.png') }}" alt="Profile Icon" width="30" height="30" onclick="window.location.href = '{{ route('admin.register') }}';">
            </li>
        </ul>
    </div>


