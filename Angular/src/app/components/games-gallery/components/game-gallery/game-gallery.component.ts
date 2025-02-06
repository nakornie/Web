import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { GameButtonComponent } from "../game-button/game-button.component";
import { GAMES } from '../../data/game.data';

@Component({
  selector: 'app-game-gallery',
  imports: [
    CommonModule,
    GameButtonComponent,
  ],
  templateUrl: './game-gallery.component.html',
  styleUrl: './game-gallery.component.scss'
})
export class GameGalleryComponent {
  games = GAMES;

  categories: string[] = [...new Set(this.games.flatMap(game => game.categories))];

  getGamesByCategory(category: string) {
    return this.games.filter(game => game.categories.includes(category));
  }
}

