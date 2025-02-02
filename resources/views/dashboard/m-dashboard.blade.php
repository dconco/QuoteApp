@extends('layout.app')

@section('title', 'Dashboard')
@section('header-title', 'Moderation Panel')

@section('style')
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f8f9fa;
         color: #333;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      .header {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         background-color: white;
         color: black;
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 10px 20px;
         z-index: 999;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .header-text {
         font-weight: bold;
         font-size: 1.2rem;
         text-align: center;
         width: 100%;
      }

      .content {
         padding: 80px 20px 80px;
      }

      .dashboard-card {
         background: white;
         border-radius: 8px;
         padding: 20px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
         margin-bottom: 20px;
         display: flex;
         justify-content: space-between;
         align-items: center;
      }

      .dashboard-card i {
         font-size: 3rem;
         color: #007bff;
      }

      .dashboard-card .card-content {
         flex-grow: 1;
         padding-left: 15px;
      }

      .dashboard-card .card-content h5 {
         margin: 0;
         font-size: 1.5rem;
      }

      .footer {
         position: fixed;
         bottom: 0;
         left: 0;
         width: 100%;
         background: white;
         color: black;
         display: flex;
         justify-content: space-around;
         align-items: center;
         padding: 10px 0;
         box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
         z-index: 999;
      }

      .footer-item {
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         font-size: 0.9rem;
      }

      .footer-item i {
         font-size: 1.5rem;
         margin-bottom: 5px;
      }
   </style>
@endsection

@section('content')
   <!-- Main Content -->
   <div class="content">
      <h5 class="mb-3">Dashboard</h5>
      <div class="row">
         <!-- Quick Stats Cards -->
         <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="dashboard-card">
               <i class="fas fa-flag"></i>
               <div class="card-content">
                  <h5>Reported Content</h5>
                  <p>15 pending reports</p>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="dashboard-card">
               <i class="fas fa-users"></i>
               <div class="card-content">
                  <h5>Users</h5>
                  <p>120 active users</p>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="dashboard-card">
               <i class="fas fa-comments"></i>
               <div class="card-content">
                  <h5>Pending Reviews</h5>
                  <p>8 reviews pending</p>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="dashboard-card">
               <i class="fas fa-tasks"></i>
               <div class="card-content">
                  <h5>Tasks</h5>
                  <p>5 tasks in progress</p>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <!-- Quick Links -->
         <div class="col-lg-4 col-md-6 mb-3">
            <div class="dashboard-card" style="cursor: pointer;">
               <i class="fas fa-clipboard-list"></i>
               <div class="card-content">
                  <h5>View Reported Content</h5>
                  <p>Manage content reports</p>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-3">
            <div class="dashboard-card" style="cursor: pointer;">
               <i class="fas fa-history"></i>
               <div class="card-content">
                  <h5>View Activity Log</h5>
                  <p>Monitor recent activities</p>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-3">
            <div class="dashboard-card" style="cursor: pointer;">
               <i class="fas fa-user-shield"></i>
               <div class="card-content">
                  <h5>User Management</h5>
                  <p>Manage user roles and permissions</p>
               </div>
            </div>
         </div>
      </div>
   </div>
@@endsection