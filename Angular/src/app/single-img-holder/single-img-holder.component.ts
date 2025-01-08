import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SingleImgHolder } from './single-img-holder.model';
import { ActivatedRoute } from '@angular/router';
import { ImgHolderService } from '../services/img-holder.service';

@Component({
  selector: 'app-single-img-holder',
  standalone: true,
  imports: [ CommonModule ],
  templateUrl: './single-img-holder.component.html',
  styleUrl: './single-img-holder.component.scss'
})

export class SingleImgHolderComponent {
  @Input() singleImgHolder!: SingleImgHolder;

  isAccordionOpen: boolean = false;

  ngOnInit () {const faceSnapId = this.route.snapshot.params['id'];}
  constructor (private route: ActivatedRoute) {}

  this.imgHolder = this.mgHolderService.getFaceSnapById(faceSnapId);

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }
}
