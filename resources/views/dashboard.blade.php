@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('content')

<style>
.dashboard-container {
  display: flex;
  flex-direction: column;
  gap: 40px;
  padding: 20px;
}

.dashboard-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.card {
  flex: 1;
  min-width: 200px;
  background: white;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
  text-align: center;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
}

.card h3 {
  color: #0a66c2;
  margin-bottom: 10px;
}

section {
  background: white;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

ul.recent-list {
  list-style: none;
  padding: 0;
}

ul.recent-list li {
  padding: 10px;
  border-bottom: 1px solid #f0f0f0;
}
</style>

{{-- <h1>TEST DASHBOARD VIEW</h1> --}}


<div class="dashboard-container">
  <!-- Stat Cards -->
  <div class="dashboard-cards">
    <div class="card">
      <h3>Total Doctors</h3>
      <p>{{ $totalDoctors }}</p>
  </div>
  
    <div class="card">
        <h3>Total Patients</h3>
        <p>{{ $totalPatients ?? 'N/A' }}</p>
    </div>
    <div class="card">
        <h3>Total Appointments</h3>
        <p>{{ $totalAppointments ?? 'N/A' }}</p>
    </div>
</div>


  <!-- Chart -->
  {{-- <section>
    <h2>Appointments Per Day</h2>
    <canvas id="appointmentsChart" width="100%" height="80"></canvas>
  </section> --}}

  <!-- Recent Entries -->
  <section>
    <h2>Recent Doctors</h2>
    <ul class="recent-list">
      @foreach ($recentDoctors as $doctor)
        <li>{{ $doctor->name }}</li>
      @endforeach
    </ul>

    <h2>Recent Patients</h2>
    <ul class="recent-list">
      @foreach ($recentPatients as $patient)
        <li>{{ $patient->name }}</li>
      @endforeach
    </ul>

    <h2>Recent Appointments</h2>
    <ul class="recent-list">
      @foreach ($recentAppointments as $appointment)
        <li>{{ $appointment->date }} - {{ ucfirst($appointment->status) }}</li>
      @endforeach
    </ul>
  </section>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('appointmentsChart').getContext('2d');
const chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: {!! json_encode($appointmentsByDate->pluck('day')) !!},
    datasets: [{
      label: 'Appointments per Day',
      data: {!! json_encode($appointmentsByDate->pluck('total')) !!},
      backgroundColor: '#0a66c2',
      borderRadius: 6
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          precision: 0
        }
      }
    }
  }
});
</script>
@endsection
