import { Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-game-button',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './game-button.component.html',
  styleUrl: './game-button.component.scss'
})
export class GameButtonComponent {
  @Input() source: string = 'public/images/default_game.png';
  @Input() name: string = 'Game';
  @Input() route: string = '/';
  @Input() categories: string[] = [];
}