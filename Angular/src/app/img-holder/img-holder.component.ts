import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';


@Component({
  selector: 'app-img-holder',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './img-holder.component.html',
  styleUrls: ['./img-holder.component.scss']
})

export class ImgHolderComponent implements OnInit {
  imgUrl!: string;
  title!: string;
  description!: string;
  createdAt!: string;

  ups = 0;
  downs = 0;
  isAccordionOpen: boolean = false;
  voteState: 'none' | 'like' | 'dislike' = 'none';

  buttonTypeMap = new Map<string, string>([
    ['none', 'default'],
    ['like', 'voted-like'],
    ['dislike', 'voted-dislike'],
  ]);

  raceMap = new Map<string, string>([
    ['Yzzil', 'race-yzzil'],
    ['Yggi', 'race-yggi'],
    ['Ouros', 'race-ouros'],
  ]);


  race: 'Yzzil' | 'Yggi' | 'Ouros' = 'Yzzil';


  // Initialisation
  ngOnInit(): void {
    this.imgUrl = 'public/images/crowned_yzzil.png';
    this.title = 'Izyl Couronnée';
    this.description = 'La grande sœur du groupe';
    this.createdAt = '21/03/24';
  }

  // Getters and setters
  get buttonClass(): string {
    return this.buttonTypeMap.get(this.voteState) || '';
  }

  get totalVotes(): number {
    return this.ups - this.downs;
  }

  // get raceClass(): string {
  //   return this.raceMap.get(this.race) || '';
  // }

  get raceClass(): string {
    const className = this.raceMap.get(this.race) || '';
    console.log('Classe assignée:', className); // Pour déboguer
    return className;
  }
  
  

  // Methodes
  addVote(voteType: 'like' | 'dislike') {
    if (voteType === 'like') {
      this.ups++;
    } else {
      this.downs++;
    }
  }

  changeVote(voteType: 'like' | 'dislike') {
    if (this.voteState === 'like') {
      this.removeVote('like');
    } else if (this.voteState === 'dislike') {
      this.removeVote('dislike');
    }
    this.addVote(voteType);
    this.voteState = voteType;
  }

  onDislike() {
    if (this.voteState === 'dislike') {
      this.removeVote('dislike');
      this.voteState = 'none';
    } else {
      this.changeVote('dislike');
    }
  }

  onLike() {
    if (this.voteState === 'like') {
      this.removeVote('like');
      this.voteState = 'none';
    } else {
      this.changeVote('like');
    }
  }

  removeVote(voteType: 'like' | 'dislike') {
    if (voteType === 'like') {
      this.ups--;
    } else {
      this.downs--;
    }
  }

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }
}