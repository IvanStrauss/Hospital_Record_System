<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
          
body {
  margin: 0;
  padding: 0;
}

.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #0a66c2;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: fixed;
    padding: -20px 0;
    margin: 0;
   /* // position: relative; */
}

.profile {
    text-align: center;
    margin-bottom: 10px;
}

.profile img {
    width: 80px;
    border-radius: 50%;
}

.profile .name {
    margin-top: 10px;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    padding: 0 20px;
}

.nav-links li {
    margin-bottom: 20px;
}

.nav-links a {
    text-decoration: none;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    border-radius: 10px;
    transition: background-color 0.3s;
}

.nav-links a:hover,
.nav-links .active a {
    background-color: #e0ebec;
    color: #0a66c2;
}

.logout-form {
    padding: 0 20px;
    
}

.logout-form button {
    width: 100%;
    background: none;
    border: none;
    color: white;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
    transition: background-color 0.3s;

}

.logout-form button:hover {
    background-color: #e0ebec;
    color: #0a66c2;
}
    </style>
  

    
</head>


<body>

    <div class="sidebar">
        <div class="profile">
          <img src="{{ asset('img/boy.png') }}" alt="Avatar">
          <p class="name">Ivan Ronda</p>
        </div>
        <ul class="nav-links">
          <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
              <i class="bi bi-grid"></i> Dashboard
            </a>
          </li>
          <li class="{{ request()->is('doctors*') ? 'active' : '' }}">
            <a href="{{ route('doctors.index') }}">
              <i class="bi bi-stethoscope"></i> Manage Doctors
            </a>
          </li>
          <li class="{{ request()->is('patients*') ? 'active' : '' }}">
            <a href="{{ route('patients.index') }}">
              <i class="bi bi-people"></i> Manage Patients
            </a>
          </li>
          <li class="{{ request()->is('appointments*') ? 'active' : '' }}">
            <a href="{{ route('appointments.index') }}">
              <i class="bi bi-calendar-event"></i> Appointments
            </a>
          </li>
          <li class="{{ request()->is('users*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}">
              <i class="bi bi-person-gear"></i> User Management
            </a>
          </li>
        </ul>
      
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
          @csrf
          <button type="submit"><i class="bi bi-power"></i> Logout</button>
        </form>
      </div>
      
    
</body>
</html>
