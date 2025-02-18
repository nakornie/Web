export const letter2morse: { [p: string]: string } = {
    'a': '.-',
    'b': '-...',
    'c': '-.-.',
    'd': '-..',
    'e': '.',
    'f': '..-.',
    'g': '--.',
    'h': '....',
    'i': '..',
    'j': '.---',
    'k': '-.-',
    'l': '.-..',
    'm': '--',
    'n': '-.',
    'o': '---',
    'p': '.--.',
    'q': '--.-',
    'r': '.-.',
    's': '...',
    't': '-',
    'u': '..-',
    'v': '...-',
    'w': '.--',
    'x': '-..-',
    'y': '-.--',
    'z': '--..',
    ' ': '/'
}

export function word2morse(word: string) {
    return word.split('').map(letter => letter2morse[letter]).join(' ');
}

export const LETTERS = [
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
];

export const WORDS = [
    'dragon', 'cat','vampire','demon','minotaure',
    'banshee', 'mermaid', 'wyvern', 'unicorn', 'chimera',
    'giant','cerberus','leviathan', 'ghost', 'werewolf'
];

export const SENTENCES = [
    'Vampires drink blood and are fast',
    'Werewolves shift when the moon is full',
    'Ghost are souls unwilling to die',
    'banshees cry when death is near',
    'Mermaids songs lure fishermen into the depths',
    'Demon is just an other term for humans',
    'The minotaure had a sad life',
    'Dragons may eat humans but they are still awesome',
    'Cerberus must be bored garding the gate to hell',
    'Giants must be real since they exist in many mythologies',
    'Cats with wings are cute dragons',
    'Chimeras exist just not the way you think',
    'Hydras also exist but are tiny sea creatures',
    'The vouivre is a french myth not a wyvern',
    'Are unicorns sexist for only letting girls near them'
];