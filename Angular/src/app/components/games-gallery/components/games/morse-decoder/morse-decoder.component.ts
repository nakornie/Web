import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { LETTERS, SENTENCES, WORDS, word2morse, letter2morse } from '../../../data/morse-decoder.data';


@Component({
  selector: 'app-morse-decoder',
  imports: [
    FormsModule,
    CommonModule
  ],
  templateUrl: './morse-decoder.component.html',
  styleUrl: './morse-decoder.component.scss'
})
export class MorseDecoderComponent {
  isAccordionOpen: boolean = false;

  difficulty: 'letters' | 'words' | 'sentences' = 'letters'; 
  
  data: any;
  morseCode: string = ''; 
  playerInput: string = ''; 
  expectedAnswer: string = '';
  answerNumber: number = 0;
  nbOfQuestion: number = 10;
  
  score: number = 0; 
  timer: number = 0; 
  intervalId: any; 

  letters = LETTERS;
  words = WORDS;
  sentences = SENTENCES;

  buttonState: 'Start' | 'Validate' | 'Restart' = 'Start';
  buttonDisabled: boolean = false;

  private pad(value: number): string {
    return value.toString().padStart(2, '0');
  }

  morseDict = Object.entries(letter2morse);

  checkAnswer() {
    this.answerNumber++;
    this.verifieAnswer();

    if (this.answerNumber == this.nbOfQuestion) {
      this.stopTimer();
      this.morseCode = 'End of the game !'
      this.buttonState = "Restart";
    }
    else {
      this.getRandomMorse();
    }
  }

  formatTime(): string {
    const minutes = Math.floor(this.timer / 60);
    const seconds = this.timer % 60;
    return `${this.pad(minutes)}:${this.pad(seconds)}`;
  }

  getRandomMorse() {
    const randomIndex = Math.floor(Math.random() * this.data.length);
    this.expectedAnswer = this.data[randomIndex];
    this.morseCode = word2morse(this.expectedAnswer);
    return this.data[randomIndex].letters;
  }

  onButtonFunction(){
    if ( this.buttonState == 'Start' ) this.startGame()
    else if ( this.buttonState == 'Validate' ) this.checkAnswer()
    else if ( this.buttonState == 'Restart' ) this.restartGame();
  }

  restartGame() {
    this.answerNumber = 0;
    this.timer = 0;
    this. score = 0;

    this.playerInput = '';
    this.morseCode = '';

    this.buttonDisabled = false;
    this.buttonState = "Start";
  }

  startGame() {
    if (this.difficulty === 'letters') this.data = this.letters;
    else if (this.difficulty === 'words') this.data = this.words;
    else this.data = this.sentences;

    this.buttonDisabled = true;

    this.buttonState = 'Validate';

    this.startTimer();
    this.getRandomMorse();
  }

  startTimer() {
    if (!this.intervalId) {
      this.intervalId = setInterval(() => {
        this.timer++;
      }, 1000);
    }
  }

  stopTimer() {
    if (this.intervalId) {
      clearInterval(this.intervalId);
      this.intervalId = null;
    }
  }

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }

  verifieAnswer() {
    if (this.playerInput.toLowerCase() === this.expectedAnswer) {
      this.score++;
    }
    this.playerInput = '';
  }

}
