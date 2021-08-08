import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-admin-page',
  templateUrl: './admin-page.component.html',
  styleUrls: ['./admin-page.component.scss']
})
export class AdminPageComponent implements OnInit {

  button_text: string = 'Add Employee';
  addEmployeeModel: boolean = false;

  constructor() { }

  ngOnInit(): void {
    
  }


  showEmployeeForm(){
    this.addEmployeeModel = true;
  }

  closeAddEmployee(){
    this.addEmployeeModel = false;
  }

}
