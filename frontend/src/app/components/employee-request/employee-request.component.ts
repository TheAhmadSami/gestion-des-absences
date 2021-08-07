import { Component, OnInit } from '@angular/core';
import axios from 'axios';
import { ToastrService } from 'ngx-toastr';


import { url } from './../_config';

@Component({
  selector: 'app-employee-request',
  templateUrl: './employee-request.component.html',
  styleUrls: ['./employee-request.component.scss']
})
export class EmployeeRequestComponent implements OnInit {

  employeeId: string = "548674215";

  constructor(private toastr: ToastrService) { }

  ngOnInit(): void {


  }

  onClick(message:string, fromDate: string, toDate: string){
    
    let formData = new FormData();
    formData.append('employee_id', this.employeeId);
    formData.append('message', message);
    formData.append('from_date', fromDate);
    formData.append('to_date', toDate);

    axios({
      method: 'post',
      url: url + 'addRequest.php',
      data: formData,
      headers: { 'Content-Type': 'multipart/form-data' }
    })
    .then(response => {
      this.toastr.success(`Your request with id ${ response.data } has successfuly submited to admin`, 'Request submitted');
    })
    .catch(response => {
      console.log(response);
    });
  }

}
