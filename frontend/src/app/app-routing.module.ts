import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { UserComponent, AdminPageComponent, LoginComponent, RequestsComponent, FinishedRequestsComponent, EmployeeComponent } from './components';
import { AuthGuard } from './Auth';

const routes: Routes = [
  {
    path: '', component: AdminPageComponent, canActivate: [AuthGuard],
    children: [
      {path: 'requests', component: RequestsComponent},
      {path: 'finished-requests', component: FinishedRequestsComponent},
      {path: 'employees', component: EmployeeComponent}
    ]
  },
  { path: 'login', component: LoginComponent },
  { path: '**', redirectTo: 'requests' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
