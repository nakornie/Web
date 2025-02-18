import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CommonModule } from '@angular/common';

import { GAMES } from '../../data/game.data';
import { MorseDecoderComponent } from '../games/morse-decoder/morse-decoder.component';
import { MinesweeperComponent } from '../games/minesweeper/minesweeper.component';
import { TicTacToeComponent } from '../games/tic-tac-toe/tic-tac-toe.component';

@Component({
  selector: 'app-game-page',
  imports: [
    CommonModule
  ],
  templateUrl: './game-page.component.html',
  styleUrls: ['./game-page.component.scss']
})

export class GamePageComponent {
  game: any;
  gameComponent: any;

  private gameComponents: { [key: string]: any } = {
    'morse-decoder': MorseDecoderComponent,
    'minesweeper': MinesweeperComponent,
    'tic-tac-toe': TicTacToeComponent
  };

  constructor(private route: ActivatedRoute) {}

  ngOnInit() {
    this.route.paramMap.subscribe(params => {
      const gameRoute = params.get('gameName');
      this.game = GAMES.find(g => g.route === gameRoute);

      this.gameComponent = this.game ? this.gameComponents[this.game.route] : null;
    });
  }
}
