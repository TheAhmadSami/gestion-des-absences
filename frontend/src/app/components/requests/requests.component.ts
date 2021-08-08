import { Component, OnInit } from '@angular/core';
import axios from 'axios';

import { url } from './../../_config';

@Component({
  selector: 'app-requests',
  templateUrl: './requests.component.html',
  styleUrls: ['./requests.component.scss']
})
export class RequestsComponent implements OnInit {

  requests: any;

  constructor() { 
    this.loadRequests();
  }

  ngOnInit(): void {
  }

  diffDates(firstDate:any, secondDate:any){
    let oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
    firstDate = new Date(firstDate);
    secondDate = new Date(secondDate);

    return Math.round(Math.abs((firstDate - secondDate) / oneDay));
  }


  loadRequests(){

    let self = this;

    axios({
      method: 'post',
      url: url + 'getRequests.php',
      headers: { 'Content-Type': 'multipart/form-data' }
    })
      .then(response => {

        self.requests = response.data;
        console.log(response.data);
        
      })
      .catch(response => {
        console.log(response);
      });
  }

}
