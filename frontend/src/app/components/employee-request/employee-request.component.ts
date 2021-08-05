import { Component, OnInit } from '@angular/core';
import axios from 'axios';

@Component({
  selector: 'app-employee-request',
  templateUrl: './employee-request.component.html',
  styleUrls: ['./employee-request.component.scss']
})
export class EmployeeRequestComponent implements OnInit {


  constructor() { }

  ngOnInit(): void {


  }

  onClick(info:string, from_date: string, to_date: string){

    console.log(`${info} ${from_date} ${to_date}`);  
  }

}
