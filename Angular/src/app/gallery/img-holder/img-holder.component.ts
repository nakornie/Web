import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';
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
  @Input() isFavorite: boolean = false; // Indique si c'est le favori
  @Output() favoriteSelected = new EventEmitter<void>();
  @Output() scoreChanged = new EventEmitter<void>();


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

  get isFavoriteImg(): string {
    return this.imgHolder.isFavorite? "favoriteImg" : "default";
  }

  onCrowned() {
    this.favoriteSelected.emit();
    this.scoreChanged.emit();
  }

  onDislike() {
    if (this.imgHolder.voteState === 'dislike') {
      this.imgHolder.removeVote('dislike');
    } else {
      this.imgHolder.changeVote('dislike');
    }
    this.scoreChanged.emit();
  }

  onLike() {
    if (this.imgHolder.voteState === 'like') {
      this.imgHolder.removeVote('like');
    } else {
      this.imgHolder.changeVote('like');
    }
    this.scoreChanged.emit();
  }

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }
}