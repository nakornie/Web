import { Component, OnInit, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ImgHolder } from './img-holder.model';


@Component({
  selector: 'app-img-holder',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './img-holder.component.html',
  styleUrls: ['./img-holder.component.scss']
})

export class ImgHolderComponent implements OnInit {
  @Input() imgHolder!: ImgHolder;

  isAccordionOpen: boolean = false;

  buttonTypeMap = new Map<string, string>([
    ['none', 'default'],
    ['like', 'voted-like'],
    ['dislike', 'voted-dislike'],
  ]);


  // Initialisation
  ngOnInit(): void {}

  // Getters and setters
  get buttonClass(): string {
    return this.buttonTypeMap.get(this.imgHolder.voteState) || '';
  }


  onDislike() {
    if (this.imgHolder.voteState === 'dislike') {
      this.imgHolder.removeVote('dislike');
    } else {
      this.imgHolder.changeVote('dislike');
    }
  }

  onLike() {
    if (this.imgHolder.voteState === 'like') {
      this.imgHolder.removeVote('like');
    } else {
      this.imgHolder.changeVote('like');
    }
  }

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }
}