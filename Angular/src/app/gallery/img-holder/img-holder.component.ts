import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ImgHolder } from './img-holder.model';
import { ImgHolderService } from '../../services/img-holder.service';


@Component({
  selector: 'app-img-holder',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './img-holder.component.html',
  styleUrls: ['./img-holder.component.scss']
})

export class ImgHolderComponent implements OnInit {
  @Input() imgHolder!: ImgHolder;
  // @Input() isFavorite: boolean = false; // Indique si c'est le favori

  isAccordionOpen: boolean = false;

  buttonTypeMap = new Map<string, string>([
    ['none', 'default'],
    ['like', 'voted-like'],
    ['dislike', 'voted-dislike'],
  ]);


  // Initialisation
  ngOnInit(): void {}

  constructor(private imgHolderService: ImgHolderService) {}


  // Getters and setters
  get buttonClass(): string {
    return this.buttonTypeMap.get(this.imgHolder.voteState) || '';
  }

  get isFavorite(): boolean {
    return this.imgHolderService.isFavorite(this.imgHolder);
  }

  onCrowned(): void {
    this.imgHolderService.setFavorite(this.imgHolder);
  }

  onDislike() {
    if (this.imgHolder.voteState === 'dislike') {
      this.imgHolder.removeVote('dislike');
    } else {
      this.imgHolder.changeVote('dislike');
    }
    this.imgHolderService.reorderImgHolders();
  }

  onLike() {
    if (this.imgHolder.voteState === 'like') {
      this.imgHolder.removeVote('like');
    } else {
      this.imgHolder.changeVote('like');
    }
    this.imgHolderService.reorderImgHolders();
  }

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }
}